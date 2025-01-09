<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $element
 * @property string $property
 */
class FormBindingElement extends Shape
{
    /**
     * @param array{
     *     element: string,
     *     property: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
