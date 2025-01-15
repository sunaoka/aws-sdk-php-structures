<?php

namespace Sunaoka\Aws\Structures\Support\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property string|null $name
 */
class Category extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
