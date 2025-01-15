<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERROR'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null $JobStatus
 * @property \Aws\Api\DateTimeResult|null $SubmittedBeforeTime
 * @property \Aws\Api\DateTimeResult|null $SubmittedAfterTime
 */
class TextTranslationJobFilter extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERROR'|'FAILED'|'STOP_REQUESTED'|'STOPPED'|null,
     *     SubmittedBeforeTime?: \Aws\Api\DateTimeResult|null,
     *     SubmittedAfterTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
