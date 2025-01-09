<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IndexedQuestionAnswersCount
 */
class FaqStatistics extends Shape
{
    /**
     * @param array{IndexedQuestionAnswersCount: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
