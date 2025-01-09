<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAlerts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlertArn
 * @property string $AnomalyDetectorArn
 * @property string $AlertName
 * @property int<0, 100> $AlertSensitivityThreshold
 * @property 'SNS'|'LAMBDA' $AlertType
 * @property 'ACTIVE'|'INACTIVE' $AlertStatus
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property array<string, string> $Tags
 */
class AlertSummary extends Shape
{
    /**
     * @param array{
     *     AlertArn?: string,
     *     AnomalyDetectorArn?: string,
     *     AlertName?: string,
     *     AlertSensitivityThreshold?: int<0, 100>,
     *     AlertType?: 'SNS'|'LAMBDA',
     *     AlertStatus?: 'ACTIVE'|'INACTIVE',
     *     LastModificationTime?: \Aws\Api\DateTimeResult,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
