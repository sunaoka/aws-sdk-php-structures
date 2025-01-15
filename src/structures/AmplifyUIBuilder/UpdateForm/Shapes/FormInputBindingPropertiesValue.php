<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property FormInputBindingPropertiesValueProperties|null $bindingProperties
 */
class FormInputBindingPropertiesValue extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     bindingProperties?: FormInputBindingPropertiesValueProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
