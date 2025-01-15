<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\AutoScalingGroupRecommendation>|null $autoScalingGroupRecommendations
 * @property list<Shapes\GetRecommendationError>|null $errors
 */
class GetAutoScalingGroupRecommendationsResponse extends Response
{
}
