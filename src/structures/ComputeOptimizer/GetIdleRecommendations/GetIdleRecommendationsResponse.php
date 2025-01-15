<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\IdleRecommendation>|null $idleRecommendations
 * @property list<Shapes\IdleRecommendationError>|null $errors
 */
class GetIdleRecommendationsResponse extends Response
{
}
