<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\ECSServiceRecommendation>|null $ecsServiceRecommendations
 * @property list<Shapes\GetRecommendationError>|null $errors
 */
class GetECSServiceRecommendationsResponse extends Response
{
}
