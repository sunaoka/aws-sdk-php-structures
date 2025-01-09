<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListProcessingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProcessingJobName
 * @property string $ProcessingJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $ProcessingEndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $ProcessingJobStatus
 * @property string $FailureReason
 * @property string $ExitMessage
 */
class ProcessingJobSummary extends Shape
{
    /**
     * @param array{
     *     ProcessingJobName: string,
     *     ProcessingJobArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     ProcessingEndTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     ProcessingJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     FailureReason?: string,
     *     ExitMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
