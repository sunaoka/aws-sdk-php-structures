<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property ComponentBindingPropertiesValueProperties|null $bindingProperties
 * @property string|null $defaultValue
 */
class ComponentBindingPropertiesValue extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     bindingProperties?: ComponentBindingPropertiesValueProperties|null,
     *     defaultValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
