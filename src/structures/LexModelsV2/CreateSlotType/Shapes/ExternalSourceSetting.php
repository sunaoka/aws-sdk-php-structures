<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrammarSlotTypeSetting $grammarSlotTypeSetting
 */
class ExternalSourceSetting extends Shape
{
    /**
     * @param array{grammarSlotTypeSetting?: GrammarSlotTypeSetting} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
