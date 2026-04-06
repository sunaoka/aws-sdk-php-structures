<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\ListWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTING'|'QUEUED'|'RUNNING'|'SUCCESS'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 */
class RunDetailSummary extends Shape
{
    /**
     * @param array{
     *     Status?: 'STARTING'|'QUEUED'|'RUNNING'|'SUCCESS'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED'|null,
     *     CreatedOn?: \Aws\Api\DateTimeResult|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     EndedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
