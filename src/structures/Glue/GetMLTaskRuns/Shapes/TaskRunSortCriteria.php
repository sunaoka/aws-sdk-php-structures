<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TASK_RUN_TYPE'|'STATUS'|'STARTED' $Column
 * @property 'DESCENDING'|'ASCENDING' $SortDirection
 */
class TaskRunSortCriteria extends Shape
{
    /**
     * @param array{
     *     Column: 'TASK_RUN_TYPE'|'STATUS'|'STARTED',
     *     SortDirection: 'DESCENDING'|'ASCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
