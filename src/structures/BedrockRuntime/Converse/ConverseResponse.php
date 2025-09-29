<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConverseOutput $output
 * @property 'end_turn'|'tool_use'|'max_tokens'|'stop_sequence'|'guardrail_intervened'|'content_filtered'|'model_context_window_exceeded' $stopReason
 * @property Shapes\TokenUsage $usage
 * @property Shapes\ConverseMetrics $metrics
 * @property Shapes\Document|null $additionalModelResponseFields
 * @property Shapes\ConverseTrace|null $trace
 * @property Shapes\PerformanceConfiguration|null $performanceConfig
 */
class ConverseResponse extends Response
{
}
