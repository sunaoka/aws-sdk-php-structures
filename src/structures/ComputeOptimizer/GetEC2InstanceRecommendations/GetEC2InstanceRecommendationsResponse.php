<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\InstanceRecommendation>|null $instanceRecommendations
 * @property list<Shapes\GetRecommendationError>|null $errors
 */
class GetEC2InstanceRecommendationsResponse extends Response
{
}
