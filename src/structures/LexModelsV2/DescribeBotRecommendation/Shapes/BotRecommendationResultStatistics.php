<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntentStatistics $intents
 * @property SlotTypeStatistics $slotTypes
 */
class BotRecommendationResultStatistics extends Shape
{
    /**
     * @param array{
     *     intents?: IntentStatistics,
     *     slotTypes?: SlotTypeStatistics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
