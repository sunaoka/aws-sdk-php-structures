<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateRangeFilter|null $dateRangeFilter
 */
class LexTranscriptFilter extends Shape
{
    /**
     * @param array{dateRangeFilter?: DateRangeFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
