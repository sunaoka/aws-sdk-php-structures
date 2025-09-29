<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateRoutingProfileQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RoutingProfileId
 * @property list<Shapes\RoutingProfileQueueConfig>|null $QueueConfigs
 * @property list<Shapes\RoutingProfileManualAssignmentQueueConfig>|null $ManualAssignmentQueueConfigs
 */
class AssociateRoutingProfileQueuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RoutingProfileId: string,
     *     QueueConfigs?: list<Shapes\RoutingProfileQueueConfig>|null,
     *     ManualAssignmentQueueConfigs?: list<Shapes\RoutingProfileManualAssignmentQueueConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
