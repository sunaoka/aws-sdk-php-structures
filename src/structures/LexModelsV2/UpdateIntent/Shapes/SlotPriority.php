<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $priority
 * @property string $slotId
 */
class SlotPriority extends Shape
{
    /**
     * @param array{
     *     priority: int,
     *     slotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
