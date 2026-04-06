<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelCustomizationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $baseModelArn
 * @property string $jobName
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $status
 * @property StatusDetails|null $statusDetails
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $customModelArn
 * @property string|null $customModelName
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|'REINFORCEMENT_FINE_TUNING'|'IMPORTED'|null $customizationType
 */
class ModelCustomizationJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     baseModelArn: string,
     *     jobName: string,
     *     status: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     statusDetails?: StatusDetails|null,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     customModelArn?: string|null,
     *     customModelName?: string|null,
     *     customizationType?: 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|'REINFORCEMENT_FINE_TUNING'|'IMPORTED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
