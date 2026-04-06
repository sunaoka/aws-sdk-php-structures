<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'notStarted'|'running'|'failed'|'completed'|'canceled'|'skipped'|'pendingApproval'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'graceful'|'ungraceful'|null $stepMode
 */
class StepState extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     status?: 'notStarted'|'running'|'failed'|'completed'|'canceled'|'skipped'|'pendingApproval'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     stepMode?: 'graceful'|'ungraceful'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
