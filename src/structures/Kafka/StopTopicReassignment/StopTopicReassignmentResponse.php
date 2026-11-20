<?php

namespace Sunaoka\Aws\Structures\Kafka\StopTopicReassignment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'IN_PROGRESS'|'STOPPING'|'COMPLETE'|'FAILED'|'STOPPED'|null $Status
 * @property string|null $TopicReassignmentOperationArn
 */
class StopTopicReassignmentResponse extends Response
{
}
