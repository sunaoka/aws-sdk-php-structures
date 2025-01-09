<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Value
 */
class AttributeBooleanValue extends Shape
{
    /**
     * @param array{Value?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
