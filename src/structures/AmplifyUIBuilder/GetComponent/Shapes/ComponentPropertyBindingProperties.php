<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $property
 * @property string|null $field
 */
class ComponentPropertyBindingProperties extends Shape
{
    /**
     * @param array{
     *     property: string,
     *     field?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
