<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'EKS', int>|null $CountByResourceType
 * @property array<'HEALTHY'|'UNHEALTHY', int>|null $CountByCoverageStatus
 */
class CoverageStatistics extends Shape
{
    /**
     * @param array{
     *     CountByResourceType?: array<'EKS', int>|null,
     *     CountByCoverageStatus?: array<'HEALTHY'|'UNHEALTHY', int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
