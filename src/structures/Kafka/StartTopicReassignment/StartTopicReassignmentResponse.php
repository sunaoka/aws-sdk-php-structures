<?php

namespace Sunaoka\Aws\Structures\Kafka\StartTopicReassignment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClusterArn
 * @property 'PENDING'|'IN_PROGRESS'|'STOPPING'|'COMPLETE'|'FAILED'|'STOPPED'|null $Status
 * @property string|null $TopicReassignmentOperationArn
 */
class StartTopicReassignmentResponse extends Response
{
}
