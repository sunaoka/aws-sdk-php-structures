<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SlotId
 * @property string $VisualId
 */
class Slot extends Shape
{
    /**
     * @param array{
     *     SlotId?: string,
     *     VisualId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
