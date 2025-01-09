<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailCustomWord> $customWords
 * @property list<GuardrailManagedWord> $managedWordLists
 */
class GuardrailWordPolicyAssessment extends Shape
{
    /**
     * @param array{
     *     customWords?: list<GuardrailCustomWord>,
     *     managedWordLists?: list<GuardrailManagedWord>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
