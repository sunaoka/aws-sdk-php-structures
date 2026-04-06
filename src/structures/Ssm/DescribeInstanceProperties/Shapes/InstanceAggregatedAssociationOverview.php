<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DetailedStatus
 * @property array<string, int>|null $InstanceAssociationStatusAggregatedCount
 */
class InstanceAggregatedAssociationOverview extends Shape
{
    /**
     * @param array{
     *     DetailedStatus?: string|null,
     *     InstanceAssociationStatusAggregatedCount?: array<string, int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
