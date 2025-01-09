<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $nextToken
 * @property list<Shapes\ECSServiceRecommendation> $ecsServiceRecommendations
 * @property list<Shapes\GetRecommendationError> $errors
 */
class GetECSServiceRecommendationsResponse extends Response
{
}
