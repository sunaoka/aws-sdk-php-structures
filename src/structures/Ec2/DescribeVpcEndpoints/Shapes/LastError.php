<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property string $Code
 */
class LastError extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     Code?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
