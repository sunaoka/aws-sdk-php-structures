<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAlerts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlertArn
 * @property string|null $AnomalyDetectorArn
 * @property string|null $AlertName
 * @property int<0, 100>|null $AlertSensitivityThreshold
 * @property 'SNS'|'LAMBDA'|null $AlertType
 * @property 'ACTIVE'|'INACTIVE'|null $AlertStatus
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property array<string, string>|null $Tags
 */
class AlertSummary extends Shape
{
    /**
     * @param array{
     *     AlertArn?: string|null,
     *     AnomalyDetectorArn?: string|null,
     *     AlertName?: string|null,
     *     AlertSensitivityThreshold?: int<0, 100>|null,
     *     AlertType?: 'SNS'|'LAMBDA'|null,
     *     AlertStatus?: 'ACTIVE'|'INACTIVE'|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
