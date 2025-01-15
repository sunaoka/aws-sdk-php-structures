<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property string|null $ModelVersion
 * @property \Aws\Api\DateTimeResult|null $LatestSampleTime
 * @property \Aws\Api\DateTimeResult|null $LatestInference
 * @property list<EdgeMetric>|null $ModelMetrics
 */
class Model extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     ModelVersion?: string|null,
     *     LatestSampleTime?: \Aws\Api\DateTimeResult|null,
     *     LatestInference?: \Aws\Api\DateTimeResult|null,
     *     ModelMetrics?: list<EdgeMetric>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
