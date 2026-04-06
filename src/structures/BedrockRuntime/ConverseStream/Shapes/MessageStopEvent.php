<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'end_turn'|'tool_use'|'max_tokens'|'stop_sequence'|'guardrail_intervened'|'content_filtered'|'malformed_model_output'|'malformed_tool_use'|'model_context_window_exceeded' $stopReason
 * @property Document|null $additionalModelResponseFields
 */
class MessageStopEvent extends Shape
{
    /**
     * @param array{
     *     stopReason: 'end_turn'|'tool_use'|'max_tokens'|'stop_sequence'|'guardrail_intervened'|'content_filtered'|'malformed_model_output'|'malformed_tool_use'|'model_context_window_exceeded',
     *     additionalModelResponseFields?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
