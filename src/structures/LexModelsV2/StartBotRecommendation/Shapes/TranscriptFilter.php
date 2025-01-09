<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LexTranscriptFilter $lexTranscriptFilter
 */
class TranscriptFilter extends Shape
{
    /**
     * @param array{lexTranscriptFilter?: LexTranscriptFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
