<?php

namespace Drupal\module_hero\Controller;
use Drupal\Core\Controller\ControllerBase;
/* 
 * 
 */
class HeroController extends ControllerBase{
    public function heroList(){
        $heroes = [
            ['name' => 'Hero 1'],
            ['name' => 'Hero 2'],
            ['name' => 'Hero 3'],
            ['name' => 'Hero 4'],
            ['name' => 'Hero 5'],
        ];
       /* $ourHeroes = '';
        foreach ($heroes as $hero) {
            $ourHeroes .= '<li>'.$hero['name'].'</li>';
        }
        
        return [
            '#type' => 'markup',
            '#markup' => '<h4>'.$this->t('These are real heroes').'</h4><ol>'.$ourHeroes.'</ol>'
        ];*/
        
        return [
            '#theme' => 'hero_list', 
            '#items' => $heroes,
            '#title' => $this->t('These are real heroes')
        ];
    }
}

