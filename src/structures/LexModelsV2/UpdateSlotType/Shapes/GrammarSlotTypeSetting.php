<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrammarSlotTypeSource $source
 */
class GrammarSlotTypeSetting extends Shape
{
    /**
     * @param array{source?: GrammarSlotTypeSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
