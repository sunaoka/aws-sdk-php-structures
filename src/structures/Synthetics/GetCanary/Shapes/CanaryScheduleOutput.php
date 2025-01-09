<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property int $DurationInSeconds
 */
class CanaryScheduleOutput extends Shape
{
    /**
     * @param array{
     *     Expression?: string,
     *     DurationInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
