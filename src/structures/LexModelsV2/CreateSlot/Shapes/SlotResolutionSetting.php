<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EnhancedFallback'|'Default' $slotResolutionStrategy
 */
class SlotResolutionSetting extends Shape
{
    /**
     * @param array{slotResolutionStrategy: 'EnhancedFallback'|'Default'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
