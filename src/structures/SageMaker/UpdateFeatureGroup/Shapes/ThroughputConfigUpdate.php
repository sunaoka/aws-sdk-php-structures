<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OnDemand'|'Provisioned' $ThroughputMode
 * @property int $ProvisionedReadCapacityUnits
 * @property int $ProvisionedWriteCapacityUnits
 */
class ThroughputConfigUpdate extends Shape
{
    /**
     * @param array{
     *     ThroughputMode?: 'OnDemand'|'Provisioned',
     *     ProvisionedReadCapacityUnits?: int,
     *     ProvisionedWriteCapacityUnits?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
