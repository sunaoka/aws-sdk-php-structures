<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\PutFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnomalyGroupId
 * @property string $TimeSeriesId
 * @property bool $IsAnomaly
 */
class AnomalyGroupTimeSeriesFeedback extends Shape
{
    /**
     * @param array{
     *     AnomalyGroupId: string,
     *     TimeSeriesId: string,
     *     IsAnomaly: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
