<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIFF'|'PERC_DIFF'|'DIFF_AS_PERC'|'POP_CURRENT_DIFF_AS_PERC'|'POP_CURRENT_DIFF'|'POP_OVERTIME_DIFF_AS_PERC'|'POP_OVERTIME_DIFF'|'PERCENT_OF_TOTAL'|'RUNNING_SUM'|'MOVING_AVERAGE' $Type
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR' $Period
 * @property int $WindowSize
 */
class TopicIRComparisonMethod extends Shape
{
    /**
     * @param array{
     *     Type?: 'DIFF'|'PERC_DIFF'|'DIFF_AS_PERC'|'POP_CURRENT_DIFF_AS_PERC'|'POP_CURRENT_DIFF'|'POP_OVERTIME_DIFF_AS_PERC'|'POP_OVERTIME_DIFF'|'PERCENT_OF_TOTAL'|'RUNNING_SUM'|'MOVING_AVERAGE',
     *     Period?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR',
     *     WindowSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
