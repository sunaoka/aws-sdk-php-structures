<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OnDemand'|'Provisioned' $ThroughputMode
 * @property int $ProvisionedReadCapacityUnits
 * @property int $ProvisionedWriteCapacityUnits
 */
class ThroughputConfigDescription extends Shape
{
    /**
     * @param array{
     *     ThroughputMode: 'OnDemand'|'Provisioned',
     *     ProvisionedReadCapacityUnits?: int,
     *     ProvisionedWriteCapacityUnits?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
