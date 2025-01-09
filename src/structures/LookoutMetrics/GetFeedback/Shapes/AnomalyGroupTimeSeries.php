<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnomalyGroupId
 * @property string $TimeSeriesId
 */
class AnomalyGroupTimeSeries extends Shape
{
    /**
     * @param array{
     *     AnomalyGroupId: string,
     *     TimeSeriesId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
