<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\RDSDBRecommendation>|null $rdsDBRecommendations
 * @property list<Shapes\GetRecommendationError>|null $errors
 */
class GetRDSDatabaseRecommendationsResponse extends Response
{
}
