<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property string|null $JobArn
 * @property string|null $RoleArn
 * @property 'AgentRFT'|'AgentRFTEvaluation'|null $JobCategory
 * @property string|null $JobConfigSchemaVersion
 * @property string|null $JobConfigDocument
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|'DeleteFailed'|null $JobStatus
 * @property 'Starting'|'Downloading'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Interrupted'|'Failed'|'Completed'|'Restarting'|'Pending'|'Evaluating'|'Deleting'|'DeleteFailed'|null $SecondaryStatus
 * @property list<JobSecondaryStatusTransition>|null $SecondaryStatusTransitions
 * @property string|null $FailureReason
 * @property list<Tag>|null $Tags
 */
class Job extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     JobArn?: string|null,
     *     RoleArn?: string|null,
     *     JobCategory?: 'AgentRFT'|'AgentRFTEvaluation'|null,
     *     JobConfigSchemaVersion?: string|null,
     *     JobConfigDocument?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     JobStatus?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|'DeleteFailed'|null,
     *     SecondaryStatus?: 'Starting'|'Downloading'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Interrupted'|'Failed'|'Completed'|'Restarting'|'Pending'|'Evaluating'|'Deleting'|'DeleteFailed'|null,
     *     SecondaryStatusTransitions?: list<JobSecondaryStatusTransition>|null,
     *     FailureReason?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
