<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListKeyPhrasesDetectionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 * @property \Aws\Api\DateTimeResult $SubmitTimeBefore
 * @property \Aws\Api\DateTimeResult $SubmitTimeAfter
 */
class KeyPhrasesDetectionJobFilter extends Shape
{
    /**
     * @param array{
     *     JobName?: string,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOP_REQUESTED'|'STOPPED',
     *     SubmitTimeBefore?: \Aws\Api\DateTimeResult,
     *     SubmitTimeAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
