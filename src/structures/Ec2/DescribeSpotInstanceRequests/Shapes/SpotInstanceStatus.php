<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class SpotInstanceStatus extends Shape
{
    /**
     * @param array{
     *     Code?: string,
     *     Message?: string,
     *     UpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
