<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListHealthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventArn
 * @property string $EventId
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property list<ImpactedLocation> $ImpactedLocations
 * @property 'ACTIVE'|'RESOLVED' $Status
 * @property double|null $PercentOfTotalTrafficImpacted
 * @property 'AVAILABILITY'|'PERFORMANCE'|'LOCAL_AVAILABILITY'|'LOCAL_PERFORMANCE' $ImpactType
 * @property double|null $HealthScoreThreshold
 */
class HealthEvent extends Shape
{
    /**
     * @param array{
     *     EventArn: string,
     *     EventId: string,
     *     StartedAt: \Aws\Api\DateTimeResult,
     *     EndedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult,
     *     ImpactedLocations: list<ImpactedLocation>,
     *     Status: 'ACTIVE'|'RESOLVED',
     *     PercentOfTotalTrafficImpacted?: double|null,
     *     ImpactType: 'AVAILABILITY'|'PERFORMANCE'|'LOCAL_AVAILABILITY'|'LOCAL_PERFORMANCE',
     *     HealthScoreThreshold?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
