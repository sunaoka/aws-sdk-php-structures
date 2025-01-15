<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InferenceRecommendationsJobName
 * @property string|null $RecommendationId
 * @property string|null $EndpointName
 * @property int<1, 100>|null $TargetCpuUtilizationPerCore
 * @property Shapes\ScalingPolicyObjective|null $ScalingPolicyObjective
 * @property Shapes\ScalingPolicyMetric|null $Metric
 * @property Shapes\DynamicScalingConfiguration|null $DynamicScalingConfiguration
 */
class GetScalingConfigurationRecommendationResponse extends Response
{
}
