<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessToolUseBlockStart|null $toolUse
 * @property HarnessToolResultBlockStart|null $toolResult
 */
class HarnessContentBlockStart extends Shape
{
    /**
     * @param array{
     *     toolUse?: HarnessToolUseBlockStart|null,
     *     toolResult?: HarnessToolResultBlockStart|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
