<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingJobName
 * @property string $TrainingJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TrainingEndTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting' $TrainingJobStatus
 * @property 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending'|null $SecondaryStatus
 * @property WarmPoolStatus|null $WarmPoolStatus
 * @property string|null $TrainingPlanArn
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
     *     TrainingJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting',
     *     SecondaryStatus?: 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending'|null,
     *     WarmPoolStatus?: WarmPoolStatus|null,
     *     TrainingPlanArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
