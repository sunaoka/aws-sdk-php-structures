<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeleteTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnswerId
 */
class SucceededTopicReviewedAnswer extends Shape
{
    /**
     * @param array{AnswerId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
