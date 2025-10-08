<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailCustomWord>|null $customWords
 * @property list<GuardrailManagedWord>|null $managedWordLists
 */
class GuardrailWordPolicyAssessment extends Shape
{
    /**
     * @param array{
     *     customWords?: list<GuardrailCustomWord>|null,
     *     managedWordLists?: list<GuardrailManagedWord>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
