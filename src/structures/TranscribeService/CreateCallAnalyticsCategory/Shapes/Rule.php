<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NonTalkTimeFilter $NonTalkTimeFilter
 * @property InterruptionFilter $InterruptionFilter
 * @property TranscriptFilter $TranscriptFilter
 * @property SentimentFilter $SentimentFilter
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     NonTalkTimeFilter?: NonTalkTimeFilter,
     *     InterruptionFilter?: InterruptionFilter,
     *     TranscriptFilter?: TranscriptFilter,
     *     SentimentFilter?: SentimentFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
