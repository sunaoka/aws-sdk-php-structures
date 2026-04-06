<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OnDemand'|'Provisioned' $ThroughputMode
 * @property int<0, 10000000>|null $ProvisionedReadCapacityUnits
 * @property int<0, 10000000>|null $ProvisionedWriteCapacityUnits
 */
class ThroughputConfig extends Shape
{
    /**
     * @param array{
     *     ThroughputMode: 'OnDemand'|'Provisioned',
     *     ProvisionedReadCapacityUnits?: int<0, 10000000>|null,
     *     ProvisionedWriteCapacityUnits?: int<0, 10000000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
