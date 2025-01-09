<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetArchitectureRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $LastAuditTimestamp
 * @property string $NextToken
 * @property list<Shapes\Recommendation> $Recommendations
 */
class GetArchitectureRecommendationsResponse extends Response
{
}
