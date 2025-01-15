<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceRecommendationsJobName
 * @property string|null $RecommendationId
 * @property string|null $EndpointName
 * @property int<1, 100>|null $TargetCpuUtilizationPerCore
 * @property Shapes\ScalingPolicyObjective|null $ScalingPolicyObjective
 */
class GetScalingConfigurationRecommendationRequest extends Request
{
    /**
     * @param array{
     *     InferenceRecommendationsJobName: string,
     *     RecommendationId?: string|null,
     *     EndpointName?: string|null,
     *     TargetCpuUtilizationPerCore?: int<1, 100>|null,
     *     ScalingPolicyObjective?: Shapes\ScalingPolicyObjective|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
