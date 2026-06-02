<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobArn
 * @property string $JobName
 * @property 'AgentRFT'|'AgentRFTEvaluation' $JobCategory
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|'DeleteFailed' $JobStatus
 * @property 'Starting'|'Downloading'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Interrupted'|'Failed'|'Completed'|'Restarting'|'Pending'|'Evaluating'|'Deleting'|'DeleteFailed' $JobSecondaryStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     JobArn: string,
     *     JobName: string,
     *     JobCategory: 'AgentRFT'|'AgentRFTEvaluation',
     *     JobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|'DeleteFailed',
     *     JobSecondaryStatus: 'Starting'|'Downloading'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Interrupted'|'Failed'|'Completed'|'Restarting'|'Pending'|'Evaluating'|'Deleting'|'DeleteFailed',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
