<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property list<Service> $services
 * @property EcsUngraceful|null $ungraceful
 * @property int|null $targetPercent
 * @property 'sampledMaxInLast24Hours'|'containerInsightsMaxInLast24Hours'|null $capacityMonitoringApproach
 */
class EcsCapacityIncreaseConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     services: list<Service>,
     *     ungraceful?: EcsUngraceful|null,
     *     targetPercent?: int|null,
     *     capacityMonitoringApproach?: 'sampledMaxInLast24Hours'|'containerInsightsMaxInLast24Hours'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
