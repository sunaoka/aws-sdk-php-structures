<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntentStatistics|null $intents
 * @property SlotTypeStatistics|null $slotTypes
 */
class BotRecommendationResultStatistics extends Shape
{
    /**
     * @param array{
     *     intents?: IntentStatistics|null,
     *     slotTypes?: SlotTypeStatistics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
