<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateRoutingProfileQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RoutingProfileId
 * @property list<Shapes\RoutingProfileQueueReference>|null $QueueReferences
 * @property list<Shapes\RoutingProfileQueueReference>|null $ManualAssignmentQueueReferences
 */
class DisassociateRoutingProfileQueuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RoutingProfileId: string,
     *     QueueReferences?: list<Shapes\RoutingProfileQueueReference>|null,
     *     ManualAssignmentQueueReferences?: list<Shapes\RoutingProfileQueueReference>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
