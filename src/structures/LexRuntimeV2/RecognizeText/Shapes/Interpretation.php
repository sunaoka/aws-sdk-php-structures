<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfidenceScore|null $nluConfidence
 * @property SentimentResponse|null $sentimentResponse
 * @property Intent|null $intent
 * @property 'Bedrock'|'Lex'|null $interpretationSource
 */
class Interpretation extends Shape
{
    /**
     * @param array{
     *     nluConfidence?: ConfidenceScore|null,
     *     sentimentResponse?: SentimentResponse|null,
     *     intent?: Intent|null,
     *     interpretationSource?: 'Bedrock'|'Lex'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
