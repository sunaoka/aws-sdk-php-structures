<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailTopic> $topics
 */
class GuardrailTopicPolicyAssessment extends Shape
{
    /**
     * @param array{topics?: list<GuardrailTopic>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
