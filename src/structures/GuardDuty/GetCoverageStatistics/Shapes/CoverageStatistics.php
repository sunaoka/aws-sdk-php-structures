<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'EKS'|'ECS'|'EC2', int> $CountByResourceType
 * @property array<'HEALTHY'|'UNHEALTHY', int> $CountByCoverageStatus
 */
class CoverageStatistics extends Shape
{
    /**
     * @param array{
     *     CountByResourceType?: array<'EKS'|'ECS'|'EC2', int>,
     *     CountByCoverageStatus?: array<'HEALTHY'|'UNHEALTHY', int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
