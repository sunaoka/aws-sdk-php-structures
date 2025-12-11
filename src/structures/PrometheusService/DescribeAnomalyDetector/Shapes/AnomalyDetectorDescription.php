<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $anomalyDetectorId
 * @property string $alias
 * @property int<30, 86400>|null $evaluationIntervalInSeconds
 * @property AnomalyDetectorMissingDataAction|null $missingDataAction
 * @property AnomalyDetectorConfiguration|null $configuration
 * @property array<string, string>|null $labels
 * @property AnomalyDetectorStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string>|null $tags
 */
class AnomalyDetectorDescription extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     anomalyDetectorId: string,
     *     alias: string,
     *     evaluationIntervalInSeconds?: int<30, 86400>|null,
     *     missingDataAction?: AnomalyDetectorMissingDataAction|null,
     *     configuration?: AnomalyDetectorConfiguration|null,
     *     labels?: array<string, string>|null,
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
