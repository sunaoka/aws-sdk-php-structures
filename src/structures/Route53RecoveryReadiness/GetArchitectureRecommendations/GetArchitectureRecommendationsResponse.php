<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetArchitectureRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $LastAuditTimestamp
 * @property string|null $NextToken
 * @property list<Shapes\Recommendation>|null $Recommendations
 */
class GetArchitectureRecommendationsResponse extends Response
{
}
