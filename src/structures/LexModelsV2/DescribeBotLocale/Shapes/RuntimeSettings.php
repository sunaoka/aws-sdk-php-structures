<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotResolutionImprovementSpecification $slotResolutionImprovement
 */
class RuntimeSettings extends Shape
{
    /**
     * @param array{slotResolutionImprovement?: SlotResolutionImprovementSpecification} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
