<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TimeSeriesId
 * @property bool $IsAnomaly
 */
class TimeSeriesFeedback extends Shape
{
    /**
     * @param array{
     *     TimeSeriesId?: string,
     *     IsAnomaly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
