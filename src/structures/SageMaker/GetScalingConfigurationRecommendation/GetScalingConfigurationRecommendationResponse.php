<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InferenceRecommendationsJobName
 * @property string $RecommendationId
 * @property string $EndpointName
 * @property int $TargetCpuUtilizationPerCore
 * @property Shapes\ScalingPolicyObjective $ScalingPolicyObjective
 * @property Shapes\ScalingPolicyMetric $Metric
 * @property Shapes\DynamicScalingConfiguration $DynamicScalingConfiguration
 */
class GetScalingConfigurationRecommendationResponse extends Response
{
}
