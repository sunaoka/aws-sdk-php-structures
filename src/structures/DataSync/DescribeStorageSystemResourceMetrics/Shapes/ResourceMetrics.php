<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property P95Metrics $P95Metrics
 * @property Capacity $Capacity
 * @property string $ResourceId
 * @property 'SVM'|'VOLUME'|'CLUSTER' $ResourceType
 */
class ResourceMetrics extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     P95Metrics?: P95Metrics,
     *     Capacity?: Capacity,
     *     ResourceId?: string,
     *     ResourceType?: 'SVM'|'VOLUME'|'CLUSTER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
