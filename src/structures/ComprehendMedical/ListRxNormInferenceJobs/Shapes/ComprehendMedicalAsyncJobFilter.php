<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListRxNormInferenceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 * @property \Aws\Api\DateTimeResult|null $SubmitTimeBefore
 * @property \Aws\Api\DateTimeResult|null $SubmitTimeAfter
 */
class ComprehendMedicalAsyncJobFilter extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null,
     *     SubmitTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SubmitTimeAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
