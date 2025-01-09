<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property string $DetailedStatus
 * @property array<string, int> $AssociationStatusAggregatedCount
 */
class AssociationOverview extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     DetailedStatus?: string,
     *     AssociationStatusAggregatedCount?: array<string, int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
