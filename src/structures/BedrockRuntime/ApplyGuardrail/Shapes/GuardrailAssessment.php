<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTopicPolicyAssessment $topicPolicy
 * @property GuardrailContentPolicyAssessment $contentPolicy
 * @property GuardrailWordPolicyAssessment $wordPolicy
 * @property GuardrailSensitiveInformationPolicyAssessment $sensitiveInformationPolicy
 * @property GuardrailContextualGroundingPolicyAssessment $contextualGroundingPolicy
 * @property GuardrailInvocationMetrics $invocationMetrics
 */
class GuardrailAssessment extends Shape
{
    /**
     * @param array{
     *     topicPolicy?: GuardrailTopicPolicyAssessment,
     *     contentPolicy?: GuardrailContentPolicyAssessment,
     *     wordPolicy?: GuardrailWordPolicyAssessment,
     *     sensitiveInformationPolicy?: GuardrailSensitiveInformationPolicyAssessment,
     *     contextualGroundingPolicy?: GuardrailContextualGroundingPolicyAssessment,
     *     invocationMetrics?: GuardrailInvocationMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
