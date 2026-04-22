<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property HarnessToolUseBlock|null $toolUse
 * @property HarnessToolResultBlock|null $toolResult
 * @property HarnessReasoningContentBlock|null $reasoningContent
 */
class HarnessContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     toolUse?: HarnessToolUseBlock|null,
     *     toolResult?: HarnessToolResultBlock|null,
     *     reasoningContent?: HarnessReasoningContentBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
