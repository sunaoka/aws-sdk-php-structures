<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Action|null $Action
 * @property string|null $AlertDescription
 * @property string|null $AlertArn
 * @property string|null $AnomalyDetectorArn
 * @property string|null $AlertName
 * @property int<0, 100>|null $AlertSensitivityThreshold
 * @property 'SNS'|'LAMBDA'|null $AlertType
 * @property 'ACTIVE'|'INACTIVE'|null $AlertStatus
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property AlertFilters|null $AlertFilters
 */
class Alert extends Shape
{
    /**
     * @param array{
     *     Action?: Action|null,
     *     AlertDescription?: string|null,
     *     AlertArn?: string|null,
     *     AnomalyDetectorArn?: string|null,
     *     AlertName?: string|null,
     *     AlertSensitivityThreshold?: int<0, 100>|null,
     *     AlertType?: 'SNS'|'LAMBDA'|null,
     *     AlertStatus?: 'ACTIVE'|'INACTIVE'|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     AlertFilters?: AlertFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
