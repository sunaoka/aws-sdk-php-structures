<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnomalyDetectorArn
 * @property string $AnomalyDetectorName
 * @property string $AnomalyDetectorDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property 'ACTIVE'|'ACTIVATING'|'DELETING'|'FAILED'|'INACTIVE'|'LEARNING'|'BACK_TEST_ACTIVATING'|'BACK_TEST_ACTIVE'|'BACK_TEST_COMPLETE'|'DEACTIVATED'|'DEACTIVATING' $Status
 * @property array<string, string> $Tags
 */
class AnomalyDetectorSummary extends Shape
{
    /**
     * @param array{
     *     AnomalyDetectorArn?: string,
     *     AnomalyDetectorName?: string,
     *     AnomalyDetectorDescription?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModificationTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'ACTIVE'|'ACTIVATING'|'DELETING'|'FAILED'|'INACTIVE'|'LEARNING'|'BACK_TEST_ACTIVATING'|'BACK_TEST_ACTIVE'|'BACK_TEST_COMPLETE'|'DEACTIVATED'|'DEACTIVATING',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
