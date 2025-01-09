<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property int<0, 31622400> $DurationInSeconds
 */
class CanaryScheduleOutput extends Shape
{
    /**
     * @param array{
     *     Expression?: string,
     *     DurationInSeconds?: int<0, 31622400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
