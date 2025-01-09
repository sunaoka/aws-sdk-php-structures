<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTransformJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransformJobName
 * @property string $TransformJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TransformEndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TransformJobStatus
 * @property string $FailureReason
 */
class TransformJobSummary extends Shape
{
    /**
     * @param array{
     *     TransformJobName: string,
     *     TransformJobArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     TransformEndTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     TransformJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
