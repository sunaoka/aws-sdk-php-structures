<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Index
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED'|null $Sentiment
 * @property SentimentScore|null $SentimentScore
 */
class BatchDetectSentimentItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int|null,
     *     Sentiment?: 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED'|null,
     *     SentimentScore?: SentimentScore|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
