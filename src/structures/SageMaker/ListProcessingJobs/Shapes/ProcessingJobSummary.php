<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListProcessingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProcessingJobName
 * @property string $ProcessingJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $ProcessingEndTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $ProcessingJobStatus
 * @property string|null $FailureReason
 * @property string|null $ExitMessage
 */
class ProcessingJobSummary extends Shape
{
    /**
     * @param array{
     *     ProcessingJobName: string,
     *     ProcessingJobArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     ProcessingEndTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     ProcessingJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     FailureReason?: string|null,
     *     ExitMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
