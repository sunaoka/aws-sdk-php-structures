<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeTopicReassignment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClusterArn
 * @property int|null $CompletedTopics
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\ErrorInfo|null $ErrorInfo
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property int|null $MigratedPartitions
 * @property 'PENDING'|'IN_PROGRESS'|'STOPPING'|'COMPLETE'|'FAILED'|'STOPPED'|null $Status
 * @property string|null $TargetInstanceType
 * @property string|null $TopicReassignmentOperationArn
 * @property list<string>|null $TopicsToExclude
 * @property list<string>|null $TopicsToInclude
 * @property int|null $TotalPartitions
 * @property int|null $TotalTopics
 */
class DescribeTopicReassignmentResponse extends Response
{
}
