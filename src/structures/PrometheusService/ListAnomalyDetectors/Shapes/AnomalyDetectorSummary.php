<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $anomalyDetectorId
 * @property string $alias
 * @property AnomalyDetectorStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string>|null $tags
 */
class AnomalyDetectorSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     anomalyDetectorId: string,
     *     alias: string,
     *     status: AnomalyDetectorStatus,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
