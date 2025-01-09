<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property FormInputValuePropertyBindingProperties $bindingProperties
 * @property list<FormInputValueProperty> $concat
 */
class FormInputValueProperty extends Shape
{
    /**
     * @param array{
     *     value?: string,
     *     bindingProperties?: FormInputValuePropertyBindingProperties,
     *     concat?: list<FormInputValueProperty>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
