<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $slotTypeSignature
 * @property string|null $description
 */
class BuiltInSlotTypeSummary extends Shape
{
    /**
     * @param array{
     *     slotTypeSignature?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
