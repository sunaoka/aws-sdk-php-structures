<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnomalyGroupId
 * @property string|null $TimeSeriesId
 */
class AnomalyGroupTimeSeries extends Shape
{
    /**
     * @param array{
     *     AnomalyGroupId: string,
     *     TimeSeriesId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
