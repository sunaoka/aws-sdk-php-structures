<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerSupportabilityScores;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'high'|'medium'|'low'|null $AggregateScore
 * @property list<Shapes\CapacityManagerSupportabilityScore>|null $CapacityManagerSupportabilityScores
 */
class GetCapacityManagerSupportabilityScoresResponse extends Response
{
}
