<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $slotTypeSignature
 * @property string $description
 */
class BuiltInSlotTypeSummary extends Shape
{
    /**
     * @param array{
     *     slotTypeSignature?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
