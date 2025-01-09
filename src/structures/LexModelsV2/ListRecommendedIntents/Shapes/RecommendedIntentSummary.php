<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListRecommendedIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentId
 * @property string $intentName
 * @property int $sampleUtterancesCount
 */
class RecommendedIntentSummary extends Shape
{
    /**
     * @param array{
     *     intentId?: string,
     *     intentName?: string,
     *     sampleUtterancesCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
