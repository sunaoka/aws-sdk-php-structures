<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\VolumeRecommendation>|null $volumeRecommendations
 * @property list<Shapes\GetRecommendationError>|null $errors
 */
class GetEBSVolumeRecommendationsResponse extends Response
{
}
