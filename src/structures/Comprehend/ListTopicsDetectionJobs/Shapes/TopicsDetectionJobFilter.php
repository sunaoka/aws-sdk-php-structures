<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListTopicsDetectionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 * @property \Aws\Api\DateTimeResult|null $SubmitTimeBefore
 * @property \Aws\Api\DateTimeResult|null $SubmitTimeAfter
 */
class TopicsDetectionJobFilter extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null,
     *     SubmitTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SubmitTimeAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
