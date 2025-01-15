<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'end_turn'|'tool_use'|'max_tokens'|'stop_sequence'|'guardrail_intervened'|'content_filtered' $stopReason
 * @property Document|null $additionalModelResponseFields
 */
class MessageStopEvent extends Shape
{
    /**
     * @param array{
     *     stopReason: 'end_turn'|'tool_use'|'max_tokens'|'stop_sequence'|'guardrail_intervened'|'content_filtered',
     *     additionalModelResponseFields?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
