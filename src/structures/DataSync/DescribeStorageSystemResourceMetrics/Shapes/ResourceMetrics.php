<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property P95Metrics|null $P95Metrics
 * @property Capacity|null $Capacity
 * @property string|null $ResourceId
 * @property 'SVM'|'VOLUME'|'CLUSTER'|null $ResourceType
 */
class ResourceMetrics extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     P95Metrics?: P95Metrics|null,
     *     Capacity?: Capacity|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'SVM'|'VOLUME'|'CLUSTER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
