<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IntentLevelSlotResolutionTestResultItem> $items
 */
class IntentLevelSlotResolutionTestResults extends Shape
{
    /**
     * @param array{items: list<IntentLevelSlotResolutionTestResultItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
