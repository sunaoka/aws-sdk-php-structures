<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingJobName
 * @property string $TrainingJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TrainingEndTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TrainingJobStatus
 * @property WarmPoolStatus|null $WarmPoolStatus
 */
class TrainingJobSummary extends Shape
{
    /**
     * @param array{
     *     TrainingJobName: string,
     *     TrainingJobArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     WarmPoolStatus?: WarmPoolStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
