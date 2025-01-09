<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEffectiveRecommendationPreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Inactive' $enhancedInfrastructureMetrics
 * @property Shapes\ExternalMetricsPreference $externalMetricsPreference
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93' $lookBackPeriod
 * @property list<Shapes\UtilizationPreference> $utilizationPreferences
 * @property list<Shapes\EffectivePreferredResource> $preferredResources
 */
class GetEffectiveRecommendationPreferencesResponse extends Response
{
}
