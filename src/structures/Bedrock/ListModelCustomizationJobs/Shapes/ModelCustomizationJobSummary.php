<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelCustomizationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $baseModelArn
 * @property string $jobName
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $status
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $customModelArn
 * @property string $customModelName
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION' $customizationType
 */
class ModelCustomizationJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     baseModelArn: string,
     *     jobName: string,
     *     status: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     lastModifiedTime?: \Aws\Api\DateTimeResult,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     customModelArn?: string,
     *     customModelName?: string,
     *     customizationType?: 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
