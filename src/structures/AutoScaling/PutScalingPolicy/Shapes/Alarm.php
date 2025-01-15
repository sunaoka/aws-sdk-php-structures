<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlarmName
 * @property string|null $AlarmARN
 */
class Alarm extends Shape
{
    /**
     * @param array{
     *     AlarmName?: string|null,
     *     AlarmARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
