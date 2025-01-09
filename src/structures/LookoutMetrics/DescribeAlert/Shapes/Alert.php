<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Action $Action
 * @property string $AlertDescription
 * @property string $AlertArn
 * @property string $AnomalyDetectorArn
 * @property string $AlertName
 * @property int $AlertSensitivityThreshold
 * @property 'SNS'|'LAMBDA' $AlertType
 * @property 'ACTIVE'|'INACTIVE' $AlertStatus
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property AlertFilters $AlertFilters
 */
class Alert extends Shape
{
    /**
     * @param array{
     *     Action?: Action,
     *     AlertDescription?: string,
     *     AlertArn?: string,
     *     AnomalyDetectorArn?: string,
     *     AlertName?: string,
     *     AlertSensitivityThreshold?: int,
     *     AlertType?: 'SNS'|'LAMBDA',
     *     AlertStatus?: 'ACTIVE'|'INACTIVE',
     *     LastModificationTime?: \Aws\Api\DateTimeResult,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     AlertFilters?: AlertFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
