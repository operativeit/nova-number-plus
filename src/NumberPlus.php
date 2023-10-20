<?php

namespace Eom\NovaNumberPlus;

use Laravel\Nova\Fields\Field;

class NumberPlus extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-number-plus';

    /**
     * NovaDependencyContainer constructor.
     *
     * @param  null  $attribute
     * @param  null  $resolveCallback
     */
    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->withMeta(['options' => config('nova-number-plus.options', [])]);
    }

    public function options(array $options): NumberPlus
    {
        $this->withMeta(compact($options));

        return $this;
    }

    public function broadcastTo($broadcastChannel): Element
    {
        return $this->withMeta([
            'broadcastTo' => $broadcastChannel,
        ]);
    }
}
