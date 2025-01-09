<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GENERATIVE_SUMMARIZATION' $Feature
 * @property 'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES' $ReasonCode
 * @property string $Message
 */
class CallAnalyticsSkippedFeature extends Shape
{
    /**
     * @param array{
     *     Feature?: 'GENERATIVE_SUMMARIZATION',
     *     ReasonCode?: 'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
