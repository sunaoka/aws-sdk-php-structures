<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVALUATION'|'LABELING_SET_GENERATION'|'IMPORT_LABELS'|'EXPORT_LABELS'|'FIND_MATCHES' $TaskRunType
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT' $Status
 * @property \Aws\Api\DateTimeResult $StartedBefore
 * @property \Aws\Api\DateTimeResult $StartedAfter
 */
class TaskRunFilterCriteria extends Shape
{
    /**
     * @param array{
     *     TaskRunType?: 'EVALUATION'|'LABELING_SET_GENERATION'|'IMPORT_LABELS'|'EXPORT_LABELS'|'FIND_MATCHES',
     *     Status?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT',
     *     StartedBefore?: \Aws\Api\DateTimeResult,
     *     StartedAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
