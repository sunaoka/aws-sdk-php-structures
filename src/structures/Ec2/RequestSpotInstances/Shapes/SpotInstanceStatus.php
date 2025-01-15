<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 */
class SpotInstanceStatus extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Message?: string|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
