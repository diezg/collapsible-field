<?php

namespace Diezg\Collapsible;

use Laravel\Nova\Fields\MorphToMany;

class MorphToManyCollapsible extends MorphToMany
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'morph-to-many-collapsible';

    public function __construct($name, $attribute = null, $resource = null)
    {
        $this->withMeta([
            'show' => __('Show') . ' ' . $name,
            'hide' => __('Hide') . ' ' . $name
        ]);
        parent::__construct($name, $attribute, $resource);
    }

    /**
     * Set the texts button.
     *
     * @param  string  $show
     * @param  string  $hide
     * @return $this
     */
    public function buttonText(string $show, string $hide)
    {
        return $this->withMeta([
            'show' => $show,
            'hide' => $hide
        ]);
    }
}
