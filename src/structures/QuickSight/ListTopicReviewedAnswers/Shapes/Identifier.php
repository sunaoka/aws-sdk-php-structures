<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identity
 */
class Identifier extends Shape
{
    /**
     * @param array{Identity: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
