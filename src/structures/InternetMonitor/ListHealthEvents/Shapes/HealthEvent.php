<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListHealthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventArn
 * @property string $EventId
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult $EndedAt
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property list<ImpactedLocation> $ImpactedLocations
 * @property 'ACTIVE'|'RESOLVED' $Status
 * @property double $PercentOfTotalTrafficImpacted
 * @property 'AVAILABILITY'|'PERFORMANCE'|'LOCAL_AVAILABILITY'|'LOCAL_PERFORMANCE' $ImpactType
 * @property double $HealthScoreThreshold
 */
class HealthEvent extends Shape
{
    /**
     * @param array{
     *     EventArn: string,
     *     EventId: string,
     *     StartedAt: \Aws\Api\DateTimeResult,
     *     EndedAt?: \Aws\Api\DateTimeResult,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult,
     *     ImpactedLocations: list<ImpactedLocation>,
     *     Status: 'ACTIVE'|'RESOLVED',
     *     PercentOfTotalTrafficImpacted?: double,
     *     ImpactType: 'AVAILABILITY'|'PERFORMANCE'|'LOCAL_AVAILABILITY'|'LOCAL_PERFORMANCE',
     *     HealthScoreThreshold?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
