<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $discoveredSlotTypeCount
 */
class SlotTypeStatistics extends Shape
{
    /**
     * @param array{discoveredSlotTypeCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
