<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERROR'|'FAILED'|'STOP_REQUESTED'|'STOPPED' $JobStatus
 * @property \Aws\Api\DateTimeResult $SubmittedBeforeTime
 * @property \Aws\Api\DateTimeResult $SubmittedAfterTime
 */
class TextTranslationJobFilter extends Shape
{
    /**
     * @param array{
     *     JobName?: string,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERROR'|'FAILED'|'STOP_REQUESTED'|'STOPPED',
     *     SubmittedBeforeTime?: \Aws\Api\DateTimeResult,
     *     SubmittedAfterTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
