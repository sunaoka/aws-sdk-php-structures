<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTopicPolicyAssessment|null $topicPolicy
 * @property GuardrailContentPolicyAssessment|null $contentPolicy
 * @property GuardrailWordPolicyAssessment|null $wordPolicy
 * @property GuardrailSensitiveInformationPolicyAssessment|null $sensitiveInformationPolicy
 * @property GuardrailContextualGroundingPolicyAssessment|null $contextualGroundingPolicy
 * @property GuardrailInvocationMetrics|null $invocationMetrics
 */
class GuardrailAssessment extends Shape
{
    /**
     * @param array{
     *     topicPolicy?: GuardrailTopicPolicyAssessment|null,
     *     contentPolicy?: GuardrailContentPolicyAssessment|null,
     *     wordPolicy?: GuardrailWordPolicyAssessment|null,
     *     sensitiveInformationPolicy?: GuardrailSensitiveInformationPolicyAssessment|null,
     *     contextualGroundingPolicy?: GuardrailContextualGroundingPolicyAssessment|null,
     *     invocationMetrics?: GuardrailInvocationMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
