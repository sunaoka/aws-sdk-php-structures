<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $property
 * @property string $field
 */
class ComponentPropertyBindingProperties extends Shape
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
