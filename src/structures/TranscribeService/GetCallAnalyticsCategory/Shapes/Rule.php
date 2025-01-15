<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NonTalkTimeFilter|null $NonTalkTimeFilter
 * @property InterruptionFilter|null $InterruptionFilter
 * @property TranscriptFilter|null $TranscriptFilter
 * @property SentimentFilter|null $SentimentFilter
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     NonTalkTimeFilter?: NonTalkTimeFilter|null,
     *     InterruptionFilter?: InterruptionFilter|null,
     *     TranscriptFilter?: TranscriptFilter|null,
     *     SentimentFilter?: SentimentFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
