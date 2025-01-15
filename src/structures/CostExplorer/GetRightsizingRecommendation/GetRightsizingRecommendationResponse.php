<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\RightsizingRecommendationMetadata|null $Metadata
 * @property Shapes\RightsizingRecommendationSummary|null $Summary
 * @property list<Shapes\RightsizingRecommendation>|null $RightsizingRecommendations
 * @property string|null $NextPageToken
 * @property Shapes\RightsizingRecommendationConfiguration|null $Configuration
 */
class GetRightsizingRecommendationResponse extends Response
{
}
