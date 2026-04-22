<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property HarnessToolUseBlockDelta|null $toolUse
 * @property list<HarnessToolResultBlockDelta>|null $toolResult
 * @property HarnessReasoningContentBlockDelta|null $reasoningContent
 */
class HarnessContentBlockDelta extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     toolUse?: HarnessToolUseBlockDelta|null,
     *     toolResult?: list<HarnessToolResultBlockDelta>|null,
     *     reasoningContent?: HarnessReasoningContentBlockDelta|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
