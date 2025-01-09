<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $detectSentiment
 */
class SentimentAnalysisSettings extends Shape
{
    /**
     * @param array{detectSentiment: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
