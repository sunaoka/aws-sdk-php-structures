<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $IndexedQuestionAnswersCount
 */
class FaqStatistics extends Shape
{
    /**
     * @param array{IndexedQuestionAnswersCount: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
