<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $previousConversationTurnsToInclude
 * @property bool|null $excludePreviousThinkingSteps
 */
class PromptCreationConfigurations extends Shape
{
    /**
     * @param array{
     *     previousConversationTurnsToInclude?: int<0, max>|null,
     *     excludePreviousThinkingSteps?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
