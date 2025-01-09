<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $nextToken
 * @property list<Shapes\InstanceRecommendation> $instanceRecommendations
 * @property list<Shapes\GetRecommendationError> $errors
 */
class GetEC2InstanceRecommendationsResponse extends Response
{
}
