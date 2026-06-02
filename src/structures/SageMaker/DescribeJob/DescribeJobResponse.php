<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobName
 * @property string $JobArn
 * @property string $RoleArn
 * @property 'AgentRFT'|'AgentRFTEvaluation' $JobCategory
 * @property string $JobConfigSchemaVersion
 * @property string|null $JobConfigDocument
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|'DeleteFailed' $JobStatus
 * @property 'Starting'|'Downloading'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Interrupted'|'Failed'|'Completed'|'Restarting'|'Pending'|'Evaluating'|'Deleting'|'DeleteFailed' $SecondaryStatus
 * @property list<Shapes\JobSecondaryStatusTransition> $SecondaryStatusTransitions
 * @property string|null $FailureReason
 * @property list<Shapes\Tag>|null $Tags
 */
class DescribeJobResponse extends Response
{
}
