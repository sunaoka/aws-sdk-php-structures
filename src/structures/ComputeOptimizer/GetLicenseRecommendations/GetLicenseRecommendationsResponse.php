<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\LicenseRecommendation>|null $licenseRecommendations
 * @property list<Shapes\GetRecommendationError>|null $errors
 */
class GetLicenseRecommendationsResponse extends Response
{
}
