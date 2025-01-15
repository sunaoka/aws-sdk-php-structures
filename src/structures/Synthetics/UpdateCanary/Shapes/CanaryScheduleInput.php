<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property int<0, 31622400>|null $DurationInSeconds
 */
class CanaryScheduleInput extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     DurationInSeconds?: int<0, 31622400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
