<?php

namespace Sunaoka\Aws\Structures\Support\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property string|null $name
 * @property list<Category>|null $categories
 */
class Service extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     name?: string|null,
     *     categories?: list<Category>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
