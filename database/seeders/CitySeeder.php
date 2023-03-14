<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
        $cities = array(
            array('country_id' => '142' ,'name' => "Acapulco"),
            array('country_id' => '142' ,'name' => "Aguascalientes"),
            array('country_id' => '142' ,'name' => "Cancun"),
            array('country_id' => '142' ,'name' => "Celaya"),
            array('country_id' => '142' ,'name' => "Ciudad victoria"),
            array('country_id' => '142' ,'name' => "Culiacan"),
            array('country_id' => '142' ,'name' => "Durango"),
            array('country_id' => '142' ,'name' => "Guadalajara"),
            array('country_id' => '142' ,'name' => "Guanajuato"),
            array('country_id' => '142' ,'name' => "Hermosillo"),
            array('country_id' => '142' ,'name' => "La Paz"),
            array('country_id' => '142' ,'name' => "Monterrey"),
            array('country_id' => '142' ,'name' => "Morelia"),
            array('country_id' => '142' ,'name' => "Puebla"),
            array('country_id' => '231' ,'name' => "Alabama"),
            array('country_id' => '231' ,'name' => "Alaska"),
            array('country_id' => '231' ,'name' => "Arizona"),
            array('country_id' => '231' ,'name' => "California"),
            array('country_id' => '231' ,'name' => "Colorado"),
            array('country_id' => '231' ,'name' => "Florida"),
            array('country_id' => '231' ,'name' => "Georgia"),
            array('country_id' => '231' ,'name' => "Ohio"),
            array('country_id' => '231' ,'name' => "Oregon"),
            array('country_id' => '231' ,'name' => "Washington"),
            array('country_id' => '231' ,'name' => "Wyoming"),
            array('country_id' => '47' ,'name' => "Armenia"),
            array('country_id' => '47' ,'name' => "Barranquilla"),
            array('country_id' => '47' ,'name' => "Bogota"),
            array('country_id' => '47' ,'name' => "Bucaramanga"),
            array('country_id' => '47' ,'name' => "Cali"),
            array('country_id' => '47' ,'name' => "Cartagena"),
            array('country_id' => '47' ,'name' => "Cúcuta"),
            array('country_id' => '47' ,'name' => "Ibagué"),
            array('country_id' => '47' ,'name' => "Manizales"),
            array('country_id' => '47' ,'name' => "Medellín"),
            array('country_id' => '47' ,'name' => "Pereira"),
            array('country_id' => '47' ,'name' => "Santa Marta"),
            array('country_id' => '47' ,'name' => "Villavicencio"),
            array('country_id' => '38' ,'name' => "Vancouver"),
            array('country_id' => '38' ,'name' => "Montreal"),
            array('country_id' => '38' ,'name' => "Toronto"),
            array('country_id' => '38' ,'name' => "Whistler"),
            array('country_id' => '38' ,'name' => "Manitoba"),
            array('country_id' => '43' ,'name' => "Puente Alto"),
            array('country_id' => '43' ,'name' => "Viña del Mar"),
            array('country_id' => '43' ,'name' => "San Bernardo"),
            array('country_id' => '43' ,'name' => "Peñalolén"),
            array('country_id' => '43' ,'name' => "Santiago"),
            array('country_id' => '43' ,'name' => "Maipú"),
            array('country_id' => '43' ,'name' => "Valparaíso"),
            array('country_id' => '43' ,'name' => "Temuco"),
            array('country_id' => '43' ,'name' => "Rancagua"),
            array('country_id' => '43' ,'name' => "Pudahuel"),
            array('country_id' => '43' ,'name' => "La Florida"),
            array('country_id' => '43' ,'name' => "Talcahuano"),
            array('country_id' => '43' ,'name' => "Iquique"),
            array('country_id' => '43' ,'name' => "Los Angeles"),
            array('country_id' => '43' ,'name' => "La Pintana"),
            array('country_id' => '43' ,'name' => "Antofagasta"),
            array('country_id' => '43' ,'name' => "Las Condes"),
            array('country_id' => '43' ,'name' => "Concepción"),
            array('country_id' => '43' ,'name' => "Talca"),
            array('country_id' => '43' ,'name' => "Arica"),
            array('country_id' => '44' ,'name' => "Chongqing"),
            array('country_id' => '44' ,'name' => "Ganzhou"),
            array('country_id' => '44' ,'name' => "Xinyang"),
            array('country_id' => '44' ,'name' => "Tangshan"),
            array('country_id' => '44' ,'name' => "Linyi"),
            array('country_id' => '44' ,'name' => "Shanghái"),
            array('country_id' => '44' ,'name' => "Cantón"),
            array('country_id' => '44' ,'name' => "Tianjin"),
            array('country_id' => '44' ,'name' => "Harbin"),
            array('country_id' => '44' ,'name' => "Fuzhou"),
            array('country_id' => '44' ,'name' => "Pekín"),
            array('country_id' => '44' ,'name' => "Shangqiu"),
            array('country_id' => '44' ,'name' => "Shenzhen"),
            array('country_id' => '44' ,'name' => "Báoding"),
            array('country_id' => '44' ,'name' => "Jinan"),
            array('country_id' => '44' ,'name' => "Nanyang"),
            array('country_id' => '44' ,'name' => "Chengdu"),
            array('country_id' => '44' ,'name' => "Wuhan"),
            array('country_id' => '44' ,'name' => "Zhoukou"),
            array('country_id' => '44' ,'name' => "Xuzhou"),
            array('country_id' => '49' ,'name' => "Brazzaville"),
            array('country_id' => '49' ,'name' => "Madingou"),
            array('country_id' => '49' ,'name' => "Gamboma"),
            array('country_id' => '49' ,'name' => "Hinda"),
            array('country_id' => '49' ,'name' => "Mfouati"),
            array('country_id' => '49' ,'name' => "Pointe-Noire"),
            array('country_id' => '49' ,'name' => "Mindouli"),
            array('country_id' => '49' ,'name' => "Owando"),
            array('country_id' => '49' ,'name' => "Loudima"),
            array('country_id' => '49' ,'name' => "Bétou"),
            array('country_id' => '49' ,'name' => "Dolisie"),
            array('country_id' => '49' ,'name' => "Impfondo"),
            array('country_id' => '49' ,'name' => "Mouyondzi"),
            array('country_id' => '49' ,'name' => "Mokéko"),
            array('country_id' => '49' ,'name' => "Igné"),
            array('country_id' => '49' ,'name' => "Nkayi"),
            array('country_id' => '49' ,'name' => "Sibiti"),
            array('country_id' => '49' ,'name' => "Kinkala"),
            array('country_id' => '49' ,'name' => "Ngabé"),
            array('country_id' => '49' ,'name' => "Ouesso"),
            array('country_id' => '52' ,'name' => "San José"),
            array('country_id' => '52' ,'name' => "Cartago"),
            array('country_id' => '52' ,'name' => "Goicoechea"),
            array('country_id' => '52' ,'name' => "San Ramón"),
            array('country_id' => '52' ,'name' => "Curridabat"),
            array('country_id' => '52' ,'name' => "Alajuela"),
            array('country_id' => '52' ,'name' => "Pérez Zeledón"),
            array('country_id' => '52' ,'name' => "Puntarenas"),
            array('country_id' => '52' ,'name' => "Alajuelita"),
            array('country_id' => '52' ,'name' => "Tibás"),
            array('country_id' => '52' ,'name' => "Desamparados"),
            array('country_id' => '52' ,'name' => "Pococí"),
            array('country_id' => '52' ,'name' => "La Unión"),
            array('country_id' => '52' ,'name' => "Grecia"),
            array('country_id' => '52' ,'name' => "Liberia"),
            array('country_id' => '52' ,'name' => "San Carlos"),
            array('country_id' => '52' ,'name' => "Heredia"),
            array('country_id' => '52' ,'name' => "Limón"),
            array('country_id' => '52' ,'name' => "Turrialba"),
            array('country_id' => '52' ,'name' => "Vázquez de Coronado"),
            array('country_id' => '55' ,'name' => "La Habana"),
            array('country_id' => '55' ,'name' => "Guantánamo"),
            array('country_id' => '55' ,'name' => "Las Tunas"),
            array('country_id' => '55' ,'name' => "Sancti Spíritus"),
            array('country_id' => '55' ,'name' => "Cárdenas"),
            array('country_id' => '55' ,'name' => "Santiago de Cuba"),
            array('country_id' => '55' ,'name' => "Santa Clara"),
            array('country_id' => '55' ,'name' => "Cienfuegos"),
            array('country_id' => '55' ,'name' => "Manzanillo"),
            array('country_id' => '55' ,'name' => "Contramaestre"),
            array('country_id' => '55' ,'name' => "Holguín"),
            array('country_id' => '55' ,'name' => "Bayamo"),
            array('country_id' => '55' ,'name' => "Matanzas"),
            array('country_id' => '55' ,'name' => "Palma Soriano"),
            array('country_id' => '55' ,'name' => "Songo-La Maya"),
            array('country_id' => '55' ,'name' => "Camagüey"),
            array('country_id' => '55' ,'name' => "Pinar del Río"),
            array('country_id' => '55' ,'name' => "Ciego de Ávila"),
            array('country_id' => '55' ,'name' => "Mayarí"),
            array('country_id' => '60' ,'name' => "Azua"),
            array('country_id' => '60' ,'name' => "Dajabón"),
            array('country_id' => '60' ,'name' => "El Seibo"),
            array('country_id' => '60' ,'name' => "Hato Mayor"),
            array('country_id' => '60' ,'name' => "La Altagracia"),
            array('country_id' => '60' ,'name' => "María Trinidad Sánchez"),
            array('country_id' => '60' ,'name' => "Monte Plata"),
            array('country_id' => '60' ,'name' => "Puerto Plata"),
            array('country_id' => '60' ,'name' => "San José de Ocoa"),
            array('country_id' => '60' ,'name' => "Sánchez Ramírez"),
            array('country_id' => '60' ,'name' => "Santo Domingo"),
            array('country_id' => '60' ,'name' => "Baoruco"),
            array('country_id' => '60' ,'name' => "Santo Domingo"),
            array('country_id' => '60' ,'name' => "Elias Piña"),
            array('country_id' => '60' ,'name' => "Hermanas Mirabal"),
            array('country_id' => '60' ,'name' => "La Romana"),
            array('country_id' => '60' ,'name' => "Monseñor Nouel"),
            array('country_id' => '60' ,'name' => "Pedernales"),
            array('country_id' => '60' ,'name' => "Samaná"),
            array('country_id' => '60' ,'name' => "San Juan"),
            array('country_id' => '60' ,'name' => "Santiago"),
            array('country_id' => '60' ,'name' => "Valverde"),
            array('country_id' => '60' ,'name' => "Barahona"),
            array('country_id' => '60' ,'name' => "Duarte"),
            array('country_id' => '60' ,'name' => "Espaillat"),
            array('country_id' => '60' ,'name' => "Independencia"),
            array('country_id' => '60' ,'name' => "La Vega"),
            array('country_id' => '60' ,'name' => "Monte Cristi"),
            array('country_id' => '60' ,'name' => "Peravia"),
            array('country_id' => '60' ,'name' => "San Cristóbal"),
            array('country_id' => '60' ,'name' => "San Pedro de Macoris"),
            array('country_id' => '60' ,'name' => "Santiago Rodríguez"),
            array('country_id' => '63' ,'name' => "Azuay"),
            array('country_id' => '63' ,'name' => "Carchi"),
            array('country_id' => '63' ,'name' => "El Oro"),
            array('country_id' => '63' ,'name' => "Guayas"),
            array('country_id' => '63' ,'name' => "Los Ríos"),
            array('country_id' => '63' ,'name' => "Napo"),
            array('country_id' => '63' ,'name' => "Pichincha"),
            array('country_id' => '63' ,'name' => "Sucumbíos"),
            array('country_id' => '63' ,'name' => "Bolívar"),
            array('country_id' => '63' ,'name' => "Chimborazo"),
            array('country_id' => '63' ,'name' => "Esmeraldas"),
            array('country_id' => '63' ,'name' => "Imbabura"),
            array('country_id' => '63' ,'name' => "Manabí"),
            array('country_id' => '63' ,'name' => "Orellana"),
            array('country_id' => '63' ,'name' => "Santa Elena"),
            array('country_id' => '63' ,'name' => "Tungurahua"),
            array('country_id' => '63' ,'name' => "Cañar"),
            array('country_id' => '63' ,'name' => "Cotopaxi"),
            array('country_id' => '63' ,'name' => "Galápagos"),
            array('country_id' => '63' ,'name' => "Loja"),
            array('country_id' => '63' ,'name' => "Morona-Santiago"),
            array('country_id' => '63' ,'name' => "Pastaza"),
            array('country_id' => '63' ,'name' => "Santo Domingo de los Tsáchilas"),
            array('country_id' => '63' ,'name' => "Zamora-Chinchipe"),
            array('country_id' => '65' ,'name' => "Ahuachapán"),
            array('country_id' => '65' ,'name' => "Cuscatlán"),
            array('country_id' => '65' ,'name' => "La Unión"),
            array('country_id' => '65' ,'name' => "San Salvador"),
            array('country_id' => '65' ,'name' => "Sonsonate"),
            array('country_id' => '65' ,'name' => "Cabañas"),
            array('country_id' => '65' ,'name' => "La Libertad"),
            array('country_id' => '65' ,'name' => "Morazán"),
            array('country_id' => '65' ,'name' => "San Vicente"),
            array('country_id' => '65' ,'name' => "Usulután"),
            array('country_id' => '65' ,'name' => "Cuscatancingo"),
            array('country_id' => '65' ,'name' => "San Miguel"),
            array('country_id' => '65' ,'name' => "Delgado"),
            array('country_id' => '65' ,'name' => "Tonacatepeque"),
            array('country_id' => '65' ,'name' => "San Martín"),
            array('country_id' => '65' ,'name' => "Zacatecoluca"),
            array('country_id' => '64' ,'name' => "Oriental"),
            array('country_id' => '64' ,'name' => "Asuán"),
            array('country_id' => '64' ,'name' => "El Cairo"),
            array('country_id' => '64' ,'name' => "Fayún"),
            array('country_id' => '64' ,'name' => "Ismailia"),
            array('country_id' => '64' ,'name' => "Matrú"),
            array('country_id' => '64' ,'name' => "Menia"),
            array('country_id' => '64' ,'name' => "Caliubia"),
            array('country_id' => '64' ,'name' => "Sinaí del Sur"),
            array('country_id' => '64' ,'name' => "Alejandría"),
            array('country_id' => '64' ,'name' => "Menufia"),
            array('country_id' => '81' ,'name' => "Tiflis"),
            array('country_id' => '81' ,'name' => "Gori"),
            array('country_id' => '81' ,'name' => "Zougdidi"),
            array('country_id' => '81' ,'name' => "Mtskheta"),
            array('country_id' => '81' ,'name' => "Tskhaltubo"),
            array('country_id' => '81' ,'name' => "Batumi"),
            array('country_id' => '81' ,'name' => "Kutaisi"),
            array('country_id' => '81' ,'name' => "Municipio de Gardabani"),
            array('country_id' => '81' ,'name' => "Zestafoni"),
            array('country_id' => '81' ,'name' => "Jashuri"),
            array('country_id' => '81' ,'name' => "Samtredia"),
            array('country_id' => '81' ,'name' => "Rustavi"),
            array('country_id' => '81' ,'name' => "Kobuleti"),
            array('country_id' => '95' ,'name' => "Artibonito"),
            array('country_id' => '95' ,'name' => "Nippes"),
            array('country_id' => '95' ,'name' => "Noroeste"),
            array('country_id' => '95' ,'name' => "Sudeste"),
            array('country_id' => '95' ,'name' => "Centro"),
            array('country_id' => '95' ,'name' => "Norte"),
            array('country_id' => '95' ,'name' => "Oeste"),
            array('country_id' => '95' ,'name' => "Grand'Anse"),
            array('country_id' => '95' ,'name' => "Nordeste"),
            array('country_id' => '95' ,'name' => "Sur"),
            array('country_id' => '101' ,'name' => "Bombay"),
            array('country_id' => '101' ,'name' => "Allahabad"),
            array('country_id' => '101' ,'name' => "Calcuta"),
            array('country_id' => '101' ,'name' => "Kanpur"),
            array('country_id' => '101' ,'name' => "Vadodara"),
            array('country_id' => '101' ,'name' => "Vadodara"),
            array('country_id' => '101' ,'name' => "Bangalore"),
            array('country_id' => '101' ,'name' => "Pune"),
            array('country_id' => '101' ,'name' => "Lucknow"),
            array('country_id' => '101' ,'name' => "Mirzapur-cum-Vindhyachal"),
            array('country_id' => '101' ,'name' => "Visakhapatnam"),
            array('country_id' => '101' ,'name' => "Hyderabad"),
            array('country_id' => '101' ,'name' => "Surat"),
            array('country_id' => '101' ,'name' => "Jaipur"),
            array('country_id' => '101' ,'name' => "Nagpur"),
            array('country_id' => '101' ,'name' => "Indore"),
            array('country_id' => '101' ,'name' => "Chennai"),
            array('country_id' => '101' ,'name' => "Ahmedabad"),
            array('country_id' => '101' ,'name' => "Mysore"),
            array('country_id' => '101' ,'name' => "Ghaziabad"),
            array('country_id' => '101' ,'name' => "Thane"),
            array('country_id' => '97' ,'name' => "Veracruz"),
            array('country_id' => '97' ,'name' => "Puerto Cortés"),
            array('country_id' => '97' ,'name' => "Catacamas"),
            array('country_id' => '97' ,'name' => "Olanchito"),
            array('country_id' => '97' ,'name' => "Yoro"),
            array('country_id' => '97' ,'name' => "Tegucigalpa"),
            array('country_id' => '97' ,'name' => "La Ceiba"),
            array('country_id' => '97' ,'name' => "Tela"),
            array('country_id' => '97' ,'name' => "Santa Cruz de Yojoa"),
            array('country_id' => '97' ,'name' => "Sonaguera"),
            array('country_id' => '97' ,'name' => "El Progreso"),
            array('country_id' => '97' ,'name' => "Choluteca"),
            array('country_id' => '97' ,'name' => "Comayagua"),
            array('country_id' => '97' ,'name' => "Siguatepeque"),
            array('country_id' => '97' ,'name' => "Santa Rosa de Copán"),
            array('country_id' => '97' ,'name' => "Choloma"),
            array('country_id' => '97' ,'name' => "Juticalpa"),
            array('country_id' => '97' ,'name' => "Villanueva"),
            array('country_id' => '97' ,'name' => "Trojes"),
            array('country_id' => '97' ,'name' => "La Lima"),
            array('country_id' => '103' ,'name' => "Elburz"),
            array('country_id' => '103' ,'name' => "Azerbaiyán Oriental"),
            array('country_id' => '103' ,'name' => "Fars"),
            array('country_id' => '103' ,'name' => "Hamadán"),
            array('country_id' => '103' ,'name' => "Isfahán"),
            array('country_id' => '103' ,'name' => "South Khorasan"),
            array('country_id' => '103' ,'name' => "Juzestán"),
            array('country_id' => '103' ,'name' => "Lorestán"),
            array('country_id' => '103' ,'name' => "Qazvin"),
            array('country_id' => '103' ,'name' => "Sistán y Baluchistán"),
            array('country_id' => '103' ,'name' => "Zanjan"),
            array('country_id' => '103' ,'name' => "Ardebil"),
            array('country_id' => '103' ,'name' => "Bushehr"),
            array('country_id' => '103' ,'name' => "Gilán"),
            array('country_id' => '103' ,'name' => "Hormozgan"),
            array('country_id' => '103' ,'name' => "Kermán"),
            array('country_id' => '103' ,'name' => "Jorasán Razaví"),
            array('country_id' => '103' ,'name' => "Kohkiluyeh y Buyer Ahmad"),
            array('country_id' => '103' ,'name' => "Markazi"),
            array('country_id' => '103' ,'name' => "Qom"),
            array('country_id' => '103' ,'name' => "Teherán"),
            array('country_id' => '103' ,'name' => "Azerbaiyán Occidental"),
            array('country_id' => '103' ,'name' => "Chahar y Bajtiari"),
            array('country_id' => '103' ,'name' => "Golestán"),
            array('country_id' => '103' ,'name' => "Ilam"),
            array('country_id' => '103' ,'name' => "Kermanshah"),
            array('country_id' => '103' ,'name' => "Khorāsān-e Shomali"),
            array('country_id' => '103' ,'name' => "Kurdistán"),
            array('country_id' => '103' ,'name' => "Mazandarán"),
            array('country_id' => '103' ,'name' => "Qazvin Qom Semnán"),
            array('country_id' => '103' ,'name' => "Semnán"),
            array('country_id' => '103' ,'name' => "Yazd"),
            array('country_id' => '104' ,'name' => "Ambar"),
            array('country_id' => '104' ,'name' => "Cadisia"),
            array('country_id' => '104' ,'name' => "Suleimaniya"),
            array('country_id' => '104' ,'name' => "Duhok"),
            array('country_id' => '104' ,'name' => "Halabja"),
            array('country_id' => '104' ,'name' => "Mesena"),
            array('country_id' => '104' ,'name' => "Wasit"),
            array('country_id' => '104' ,'name' => "Basora"),
            array('country_id' => '104' ,'name' => "Nayaf"),
            array('country_id' => '104' ,'name' => "Babilonia"),
            array('country_id' => '104' ,'name' => "Di Car"),
            array('country_id' => '104' ,'name' => "Al-Karbala"),
            array('country_id' => '104' ,'name' => "Ninaua"),
            array('country_id' => '104' ,'name' => "Mutana"),
            array('country_id' => '104' ,'name' => "Irbil"),
            array('country_id' => '104' ,'name' => "Bagdad"),
            array('country_id' => '104' ,'name' => "Diyala"),
            array('country_id' => '104' ,'name' => "Kirkuk"),
            array('country_id' => '104' ,'name' => "Salah ad-Din"),
            array('country_id' => '106' ,'name' => "Tel Aviv"),
            array('country_id' => '106' ,'name' => "Ramat Hasharon"),
            array('country_id' => '106' ,'name' => "Haïfa"),
            array('country_id' => '106' ,'name' => "Netanya"),
            array('country_id' => '106' ,'name' => "Ramat Gan"),
            array('country_id' => '107' ,'name' => "Roma"),
            array('country_id' => '107' ,'name' => "Palermo"),
            array('country_id' => '107' ,'name' => "Bari"),
            array('country_id' => '107' ,'name' => "Mesina"),
            array('country_id' => '107' ,'name' => "Brescia"),
            array('country_id' => '107' ,'name' => "Milán"),
            array('country_id' => '107' ,'name' => "Génova"),
        );
        DB::table('cities')->insert($cities);
    }
}