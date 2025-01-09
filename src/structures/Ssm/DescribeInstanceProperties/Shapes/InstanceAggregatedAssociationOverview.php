<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DetailedStatus
 * @property array<string, int> $InstanceAssociationStatusAggregatedCount
 */
class InstanceAggregatedAssociationOverview extends Shape
{
    /**
     * @param array{
     *     DetailedStatus?: string,
     *     InstanceAssociationStatusAggregatedCount?: array<string, int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
