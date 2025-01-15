<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVALUATION'|'LABELING_SET_GENERATION'|'IMPORT_LABELS'|'EXPORT_LABELS'|'FIND_MATCHES'|null $TaskRunType
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartedBefore
 * @property \Aws\Api\DateTimeResult|null $StartedAfter
 */
class TaskRunFilterCriteria extends Shape
{
    /**
     * @param array{
     *     TaskRunType?: 'EVALUATION'|'LABELING_SET_GENERATION'|'IMPORT_LABELS'|'EXPORT_LABELS'|'FIND_MATCHES'|null,
     *     Status?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null,
     *     StartedBefore?: \Aws\Api\DateTimeResult|null,
     *     StartedAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
