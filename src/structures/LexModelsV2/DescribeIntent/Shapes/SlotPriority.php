<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $priority
 * @property string $slotId
 */
class SlotPriority extends Shape
{
    /**
     * @param array{
     *     priority: int<0, 100>,
     *     slotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
