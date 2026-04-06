<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotResolutionImprovementSpecification|null $slotResolutionImprovement
 * @property NluImprovementSpecification|null $nluImprovement
 */
class RuntimeSettings extends Shape
{
    /**
     * @param array{
     *     slotResolutionImprovement?: SlotResolutionImprovementSpecification|null,
     *     nluImprovement?: NluImprovementSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
