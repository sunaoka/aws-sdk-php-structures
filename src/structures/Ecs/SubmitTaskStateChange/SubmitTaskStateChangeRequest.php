<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitTaskStateChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string|null $task
 * @property string|null $status
 * @property string|null $reason
 * @property list<Shapes\ContainerStateChange>|null $containers
 * @property list<Shapes\AttachmentStateChange>|null $attachments
 * @property list<Shapes\ManagedAgentStateChange>|null $managedAgents
 * @property \Aws\Api\DateTimeResult|null $pullStartedAt
 * @property \Aws\Api\DateTimeResult|null $pullStoppedAt
 * @property \Aws\Api\DateTimeResult|null $executionStoppedAt
 */
class SubmitTaskStateChangeRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     task?: string|null,
     *     status?: string|null,
     *     reason?: string|null,
     *     containers?: list<Shapes\ContainerStateChange>|null,
     *     attachments?: list<Shapes\AttachmentStateChange>|null,
     *     managedAgents?: list<Shapes\ManagedAgentStateChange>|null,
     *     pullStartedAt?: \Aws\Api\DateTimeResult|null,
     *     pullStoppedAt?: \Aws\Api\DateTimeResult|null,
     *     executionStoppedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
