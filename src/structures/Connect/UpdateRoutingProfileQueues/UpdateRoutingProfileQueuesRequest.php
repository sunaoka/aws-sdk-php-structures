<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RoutingProfileId
 * @property list<Shapes\RoutingProfileQueueConfig> $QueueConfigs
 */
class UpdateRoutingProfileQueuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RoutingProfileId: string,
     *     QueueConfigs: list<Shapes\RoutingProfileQueueConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
