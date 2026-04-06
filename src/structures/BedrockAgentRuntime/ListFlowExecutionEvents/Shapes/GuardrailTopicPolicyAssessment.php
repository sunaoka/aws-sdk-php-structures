<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailTopic>|null $topics
 */
class GuardrailTopicPolicyAssessment extends Shape
{
    /**
     * @param array{topics?: list<GuardrailTopic>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
