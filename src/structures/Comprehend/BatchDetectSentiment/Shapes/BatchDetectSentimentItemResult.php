<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED' $Sentiment
 * @property SentimentScore $SentimentScore
 */
class BatchDetectSentimentItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int,
     *     Sentiment?: 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED',
     *     SentimentScore?: SentimentScore
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
