<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrammarSlotTypeSetting|null $grammarSlotTypeSetting
 */
class ExternalSourceSetting extends Shape
{
    /**
     * @param array{grammarSlotTypeSetting?: GrammarSlotTypeSetting|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
