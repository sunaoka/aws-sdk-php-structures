<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEffectiveRecommendationPreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Inactive'|null $enhancedInfrastructureMetrics
 * @property Shapes\ExternalMetricsPreference|null $externalMetricsPreference
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93'|null $lookBackPeriod
 * @property list<Shapes\UtilizationPreference>|null $utilizationPreferences
 * @property list<Shapes\EffectivePreferredResource>|null $preferredResources
 */
class GetEffectiveRecommendationPreferencesResponse extends Response
{
}
