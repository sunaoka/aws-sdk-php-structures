<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FormInputValueProperty|null $displayValue
 * @property FormInputValueProperty $value
 */
class ValueMapping extends Shape
{
    /**
     * @param array{
     *     displayValue?: FormInputValueProperty|null,
     *     value: FormInputValueProperty
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
