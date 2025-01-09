<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property ComponentBindingPropertiesValueProperties $bindingProperties
 * @property string $defaultValue
 */
class ComponentBindingPropertiesValue extends Shape
{
    /**
     * @param array{
     *     type?: string,
     *     bindingProperties?: ComponentBindingPropertiesValueProperties,
     *     defaultValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
