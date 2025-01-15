<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectTargetedSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED'|null $Sentiment
 * @property SentimentScore|null $SentimentScore
 */
class MentionSentiment extends Shape
{
    /**
     * @param array{
     *     Sentiment?: 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED'|null,
     *     SentimentScore?: SentimentScore|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
