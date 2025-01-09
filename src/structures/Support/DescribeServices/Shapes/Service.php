<?php

namespace Sunaoka\Aws\Structures\Support\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $name
 * @property list<Category> $categories
 */
class Service extends Shape
{
    /**
     * @param array{
     *     code?: string,
     *     name?: string,
     *     categories?: list<Category>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
