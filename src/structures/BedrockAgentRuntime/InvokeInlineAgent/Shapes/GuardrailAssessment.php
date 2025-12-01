<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailContentPolicyAssessment|null $contentPolicy
 * @property GuardrailSensitiveInformationPolicyAssessment|null $sensitiveInformationPolicy
 * @property GuardrailTopicPolicyAssessment|null $topicPolicy
 * @property GuardrailWordPolicyAssessment|null $wordPolicy
 */
class GuardrailAssessment extends Shape
{
    /**
     * @param array{
     *     contentPolicy?: GuardrailContentPolicyAssessment|null,
     *     sensitiveInformationPolicy?: GuardrailSensitiveInformationPolicyAssessment|null,
     *     topicPolicy?: GuardrailTopicPolicyAssessment|null,
     *     wordPolicy?: GuardrailWordPolicyAssessment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
