<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EventArn
 * @property string $EventId
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult $EndedAt
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property list<Shapes\ImpactedLocation> $ImpactedLocations
 * @property 'ACTIVE'|'RESOLVED' $Status
 * @property double $PercentOfTotalTrafficImpacted
 * @property 'AVAILABILITY'|'PERFORMANCE'|'LOCAL_AVAILABILITY'|'LOCAL_PERFORMANCE' $ImpactType
 * @property double $HealthScoreThreshold
 */
class GetHealthEventResponse extends Response
{
}
