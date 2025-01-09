<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $property
 * @property string $field
 */
class FormInputValuePropertyBindingProperties extends Shape
{
    /**
     * @param array{
     *     property: string,
     *     field?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
