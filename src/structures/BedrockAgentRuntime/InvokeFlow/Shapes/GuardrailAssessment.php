<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTopicPolicyAssessment|null $topicPolicy
 * @property GuardrailContentPolicyAssessment|null $contentPolicy
 * @property GuardrailWordPolicyAssessment|null $wordPolicy
 * @property GuardrailSensitiveInformationPolicyAssessment|null $sensitiveInformationPolicy
 */
class GuardrailAssessment extends Shape
{
    /**
     * @param array{
     *     topicPolicy?: GuardrailTopicPolicyAssessment|null,
     *     contentPolicy?: GuardrailContentPolicyAssessment|null,
     *     wordPolicy?: GuardrailWordPolicyAssessment|null,
     *     sensitiveInformationPolicy?: GuardrailSensitiveInformationPolicyAssessment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
