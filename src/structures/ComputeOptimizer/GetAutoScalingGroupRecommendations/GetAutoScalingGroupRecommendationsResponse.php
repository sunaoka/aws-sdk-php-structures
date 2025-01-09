<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $nextToken
 * @property list<Shapes\AutoScalingGroupRecommendation> $autoScalingGroupRecommendations
 * @property list<Shapes\GetRecommendationError> $errors
 */
class GetAutoScalingGroupRecommendationsResponse extends Response
{
}
