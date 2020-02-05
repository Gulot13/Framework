<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array([
            'name' => 'JavaScript',
            'desc' => 'Langage de script JavaScript',
            'logo' => 'js.png',
        ],
        [
            'name' => 'HTML5 - CSS3',
            'desc' => 'Langage HTML5 et CSS3 pour le développement Web',
            'logo' => 'html-css.png',
        ],
        [
            'name' => 'PHP',
            'desc' => 'Langage de script PHP, utilisé côté serveur pour les application Web',
            'logo' => 'php.png',
        ],
        [
            'name' => 'Python',
            'desc' => 'Langage de script Python',
            'logo' => 'python.png',
        ]);
        App\Skill::insert($data);
    }
}
