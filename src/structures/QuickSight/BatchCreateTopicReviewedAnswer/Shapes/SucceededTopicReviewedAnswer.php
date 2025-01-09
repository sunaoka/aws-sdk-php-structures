<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnswerId
 */
class SucceededTopicReviewedAnswer extends Shape
{
    /**
     * @param array{AnswerId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
