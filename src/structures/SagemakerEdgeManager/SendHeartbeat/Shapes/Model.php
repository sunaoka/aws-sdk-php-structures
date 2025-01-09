<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelVersion
 * @property \Aws\Api\DateTimeResult $LatestSampleTime
 * @property \Aws\Api\DateTimeResult $LatestInference
 * @property list<EdgeMetric> $ModelMetrics
 */
class Model extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     ModelVersion?: string,
     *     LatestSampleTime?: \Aws\Api\DateTimeResult,
     *     LatestInference?: \Aws\Api\DateTimeResult,
     *     ModelMetrics?: list<EdgeMetric>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
