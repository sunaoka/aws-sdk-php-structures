<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceRecommendationsJobName
 * @property string $RecommendationId
 * @property string $EndpointName
 * @property int<1, 100> $TargetCpuUtilizationPerCore
 * @property Shapes\ScalingPolicyObjective $ScalingPolicyObjective
 */
class GetScalingConfigurationRecommendationRequest extends Request
{
    /**
     * @param array{
     *     InferenceRecommendationsJobName: string,
     *     RecommendationId?: string,
     *     EndpointName?: string,
     *     TargetCpuUtilizationPerCore?: int<1, 100>,
     *     ScalingPolicyObjective?: Shapes\ScalingPolicyObjective
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
