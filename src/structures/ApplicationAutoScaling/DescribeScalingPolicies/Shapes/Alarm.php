<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlarmName
 * @property string $AlarmARN
 */
class Alarm extends Shape
{
    /**
     * @param array{
     *     AlarmName: string,
     *     AlarmARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
