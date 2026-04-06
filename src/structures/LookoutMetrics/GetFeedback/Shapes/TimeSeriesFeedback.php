<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TimeSeriesId
 * @property bool|null $IsAnomaly
 */
class TimeSeriesFeedback extends Shape
{
    /**
     * @param array{
     *     TimeSeriesId?: string|null,
     *     IsAnomaly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
