<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SlotId
 * @property string|null $VisualId
 */
class Slot extends Shape
{
    /**
     * @param array{
     *     SlotId?: string|null,
     *     VisualId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
