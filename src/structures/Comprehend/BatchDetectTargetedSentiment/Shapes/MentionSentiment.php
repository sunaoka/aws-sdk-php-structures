<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectTargetedSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED' $Sentiment
 * @property SentimentScore $SentimentScore
 */
class MentionSentiment extends Shape
{
    /**
     * @param array{
     *     Sentiment?: 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED',
     *     SentimentScore?: SentimentScore
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
