<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnomalyDetectorArn
 * @property string|null $AnomalyDetectorName
 * @property string|null $AnomalyDetectorDescription
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property 'ACTIVE'|'ACTIVATING'|'DELETING'|'FAILED'|'INACTIVE'|'LEARNING'|'BACK_TEST_ACTIVATING'|'BACK_TEST_ACTIVE'|'BACK_TEST_COMPLETE'|'DEACTIVATED'|'DEACTIVATING'|null $Status
 * @property array<string, string>|null $Tags
 */
class AnomalyDetectorSummary extends Shape
{
    /**
     * @param array{
     *     AnomalyDetectorArn?: string|null,
     *     AnomalyDetectorName?: string|null,
     *     AnomalyDetectorDescription?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'ACTIVE'|'ACTIVATING'|'DELETING'|'FAILED'|'INACTIVE'|'LEARNING'|'BACK_TEST_ACTIVATING'|'BACK_TEST_ACTIVE'|'BACK_TEST_COMPLETE'|'DEACTIVATED'|'DEACTIVATING'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
