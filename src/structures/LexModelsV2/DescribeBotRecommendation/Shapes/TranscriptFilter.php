<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LexTranscriptFilter|null $lexTranscriptFilter
 */
class TranscriptFilter extends Shape
{
    /**
     * @param array{lexTranscriptFilter?: LexTranscriptFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
