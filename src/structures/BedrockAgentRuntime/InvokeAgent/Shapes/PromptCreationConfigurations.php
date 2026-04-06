<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $excludePreviousThinkingSteps
 * @property int<0, max>|null $previousConversationTurnsToInclude
 */
class PromptCreationConfigurations extends Shape
{
    /**
     * @param array{
     *     excludePreviousThinkingSteps?: bool|null,
     *     previousConversationTurnsToInclude?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
