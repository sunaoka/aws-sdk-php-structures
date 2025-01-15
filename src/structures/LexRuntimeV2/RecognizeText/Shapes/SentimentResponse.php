<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MIXED'|'NEGATIVE'|'NEUTRAL'|'POSITIVE'|null $sentiment
 * @property SentimentScore|null $sentimentScore
 */
class SentimentResponse extends Shape
{
    /**
     * @param array{
     *     sentiment?: 'MIXED'|'NEGATIVE'|'NEUTRAL'|'POSITIVE'|null,
     *     sentimentScore?: SentimentScore|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
