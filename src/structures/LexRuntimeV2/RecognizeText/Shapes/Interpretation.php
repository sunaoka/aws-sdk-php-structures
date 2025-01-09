<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfidenceScore $nluConfidence
 * @property SentimentResponse $sentimentResponse
 * @property Intent $intent
 * @property 'Bedrock'|'Lex' $interpretationSource
 */
class Interpretation extends Shape
{
    /**
     * @param array{
     *     nluConfidence?: ConfidenceScore,
     *     sentimentResponse?: SentimentResponse,
     *     intent?: Intent,
     *     interpretationSource?: 'Bedrock'|'Lex'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
