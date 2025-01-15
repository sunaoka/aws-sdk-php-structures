<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 * @property FormInputValuePropertyBindingProperties|null $bindingProperties
 * @property list<FormInputValueProperty>|null $concat
 */
class FormInputValueProperty extends Shape
{
    /**
     * @param array{
     *     value?: string|null,
     *     bindingProperties?: FormInputValuePropertyBindingProperties|null,
     *     concat?: list<FormInputValueProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
