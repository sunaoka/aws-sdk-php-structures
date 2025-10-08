<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub;

class CostOptimizationHubClient extends \Aws\CostOptimizationHub\CostOptimizationHubClient
{
    use GetPreferences\GetPreferencesTrait;
    use GetRecommendation\GetRecommendationTrait;
    use ListEnrollmentStatuses\ListEnrollmentStatusesTrait;
    use ListRecommendationSummaries\ListRecommendationSummariesTrait;
    use ListRecommendations\ListRecommendationsTrait;
    use UpdateEnrollmentStatus\UpdateEnrollmentStatusTrait;
    use UpdatePreferences\UpdatePreferencesTrait;
}
