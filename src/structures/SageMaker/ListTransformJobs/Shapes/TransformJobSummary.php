<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTransformJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransformJobName
 * @property string $TransformJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TransformEndTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TransformJobStatus
 * @property string|null $FailureReason
 */
class TransformJobSummary extends Shape
{
    /**
     * @param array{
     *     TransformJobName: string,
     *     TransformJobArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     TransformEndTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     TransformJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
