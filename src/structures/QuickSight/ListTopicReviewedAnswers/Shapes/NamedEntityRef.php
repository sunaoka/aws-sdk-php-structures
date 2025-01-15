<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NamedEntityName
 */
class NamedEntityRef extends Shape
{
    /**
     * @param array{NamedEntityName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
