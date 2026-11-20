<?php

namespace Sunaoka\Aws\Structures\Kafka\StopTopicReassignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $TopicReassignmentOperationArn
 */
class StopTopicReassignmentRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     TopicReassignmentOperationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
