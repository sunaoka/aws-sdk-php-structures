<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingJobName
 * @property string $TrainingJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TrainingEndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TrainingJobStatus
 * @property 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending' $SecondaryStatus
 * @property WarmPoolStatus $WarmPoolStatus
 * @property string $TrainingPlanArn
 */
class TrainingJobSummary extends Shape
{
    /**
     * @param array{
     *     TrainingJobName: string,
     *     TrainingJobArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     TrainingJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     SecondaryStatus?: 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending',
     *     WarmPoolStatus?: WarmPoolStatus,
     *     TrainingPlanArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
