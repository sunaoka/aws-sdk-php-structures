<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OnDemand'|'Provisioned'|null $ThroughputMode
 * @property int<0, 10000000>|null $ProvisionedReadCapacityUnits
 * @property int<0, 10000000>|null $ProvisionedWriteCapacityUnits
 */
class ThroughputConfigUpdate extends Shape
{
    /**
     * @param array{
     *     ThroughputMode?: 'OnDemand'|'Provisioned'|null,
     *     ProvisionedReadCapacityUnits?: int<0, 10000000>|null,
     *     ProvisionedWriteCapacityUnits?: int<0, 10000000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
