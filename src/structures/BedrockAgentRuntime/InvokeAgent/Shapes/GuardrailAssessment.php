<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailContentPolicyAssessment $contentPolicy
 * @property GuardrailSensitiveInformationPolicyAssessment $sensitiveInformationPolicy
 * @property GuardrailTopicPolicyAssessment $topicPolicy
 * @property GuardrailWordPolicyAssessment $wordPolicy
 */
class GuardrailAssessment extends Shape
{
    /**
     * @param array{
     *     contentPolicy?: GuardrailContentPolicyAssessment,
     *     sensitiveInformationPolicy?: GuardrailSensitiveInformationPolicyAssessment,
     *     topicPolicy?: GuardrailTopicPolicyAssessment,
     *     wordPolicy?: GuardrailWordPolicyAssessment
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
