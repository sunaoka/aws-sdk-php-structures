<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $nextToken
 * @property list<Shapes\IdleRecommendation> $idleRecommendations
 * @property list<Shapes\IdleRecommendationError> $errors
 */
class GetIdleRecommendationsResponse extends Response
{
}
