<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartCallAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GENERATIVE_SUMMARIZATION'|null $Feature
 * @property 'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES'|null $ReasonCode
 * @property string|null $Message
 */
class CallAnalyticsSkippedFeature extends Shape
{
    /**
     * @param array{
     *     Feature?: 'GENERATIVE_SUMMARIZATION'|null,
     *     ReasonCode?: 'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
