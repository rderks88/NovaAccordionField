<?php

namespace Imumz\NovaAccordionField;

use Laravel\Nova\Fields\Field;

class NovaAccordionField extends Field
{
    public $showOnUpdate = false;
    public $showOnIndex = false;

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-accordion-field';


    public function data($data){
        
        return $this->withMeta([
            'data' => $data
        ]);
    }

    public function title($title){
        return $this->withMeta([
            'title' => $title
        ]);
    }

    public function description($description){
        return $this->withMeta([
            'description' => $description
        ]);
    }

    /*public function titleBgColor($titleBgColor){
        return $this->withMeta([
            'titleBgColor' => $titleBgColor
        ]);
    }

    public function titleColor($titleColor){
        return $this->withMeta([
            'titleColor' => $titleColor
        ]);
    }*/

}
