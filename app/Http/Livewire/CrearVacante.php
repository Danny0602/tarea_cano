<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\City;
use App\Models\Country;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    use WithFileUploads;
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    public $pais;
    public $ciudades=[];
    public $ciudad;

    protected $rules = [
        'titulo' => 'required',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required',
        'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:1024',
         'ciudad' => 'required'
    ];
    

    public function render()
    {

        if(!empty($this->pais)) {
            $this->ciudades = City::where('country_id', $this->pais)->get();
        }
        $salarios = Salario::all();
        $categorias = Categoria::all();
        $paises = Country::all();
        return view('livewire.crear-vacante',[
            'salarios' => $salarios,
            'categorias' => $categorias,
            'paises' => $paises
        ]);
    }

    public function submit(){
        
        $datos = $this->validate();
        
        //guardar la imagen para tener la url

        $imagen = $this->imagen->store('public/vacantes');
        $datos['imagen'] = str_replace('public/vacantes/', '',$imagen);
        //guardar todos los datos
 
        Vacante::create([
        'titulo' => $datos['titulo'],
        'salario_id' => $datos['salario'],
        'categoria_id' => $datos['categoria'],
        'empresa' => $datos['empresa'],
        'ultimo_dia' => $datos['ultimo_dia'],
        'descripcion' => $datos['descripcion'],
        'imagen' => $datos['imagen'],
        'city_id' => $datos['ciudad'],      
        'user_id' => auth()->user()->id
        ]);


        //crear un mensaje
        session()->flash('message', 'Vacante publicada correctamente.');

        //redireccionar
        return redirect()->route('dashboard');
    }
}
