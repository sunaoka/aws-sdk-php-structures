<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 */
class VisualOptions extends Shape
{
    /**
     * @param array{type?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
