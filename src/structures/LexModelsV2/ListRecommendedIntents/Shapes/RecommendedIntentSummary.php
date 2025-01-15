<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListRecommendedIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $intentId
 * @property string|null $intentName
 * @property int|null $sampleUtterancesCount
 */
class RecommendedIntentSummary extends Shape
{
    /**
     * @param array{
     *     intentId?: string|null,
     *     intentName?: string|null,
     *     sampleUtterancesCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
