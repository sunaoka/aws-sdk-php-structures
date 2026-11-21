<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdateProductPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $body
 */
class DisplayContent extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     body: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
