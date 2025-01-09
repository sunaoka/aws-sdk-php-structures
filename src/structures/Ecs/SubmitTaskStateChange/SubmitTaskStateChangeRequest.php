<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitTaskStateChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $task
 * @property string $status
 * @property string $reason
 * @property list<Shapes\ContainerStateChange> $containers
 * @property list<Shapes\AttachmentStateChange> $attachments
 * @property list<Shapes\ManagedAgentStateChange> $managedAgents
 * @property \Aws\Api\DateTimeResult $pullStartedAt
 * @property \Aws\Api\DateTimeResult $pullStoppedAt
 * @property \Aws\Api\DateTimeResult $executionStoppedAt
 */
class SubmitTaskStateChangeRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     task?: string,
     *     status?: string,
     *     reason?: string,
     *     containers?: list<Shapes\ContainerStateChange>,
     *     attachments?: list<Shapes\AttachmentStateChange>,
     *     managedAgents?: list<Shapes\ManagedAgentStateChange>,
     *     pullStartedAt?: \Aws\Api\DateTimeResult,
     *     pullStoppedAt?: \Aws\Api\DateTimeResult,
     *     executionStoppedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
