<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'end_turn'|'tool_use'|'tool_result'|'max_tokens'|'stop_sequence'|'content_filtered'|'malformed_model_output'|'malformed_tool_use'|'interrupted'|'partial_turn'|'model_context_window_exceeded'|'max_iterations_exceeded'|'max_output_tokens_exceeded'|'timeout_exceeded' $stopReason
 */
class HarnessMessageStopEvent extends Shape
{
    /**
     * @param array{stopReason: 'end_turn'|'tool_use'|'tool_result'|'max_tokens'|'stop_sequence'|'content_filtered'|'malformed_model_output'|'malformed_tool_use'|'interrupted'|'partial_turn'|'model_context_window_exceeded'|'max_iterations_exceeded'|'max_output_tokens_exceeded'|'timeout_exceeded'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
