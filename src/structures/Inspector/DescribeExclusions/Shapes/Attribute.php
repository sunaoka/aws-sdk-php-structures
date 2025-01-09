<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeExclusions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 */
class Attribute extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
