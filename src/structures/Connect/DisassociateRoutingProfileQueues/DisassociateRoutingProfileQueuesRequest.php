<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateRoutingProfileQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RoutingProfileId
 * @property list<Shapes\RoutingProfileQueueReference> $QueueReferences
 */
class DisassociateRoutingProfileQueuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RoutingProfileId: string,
     *     QueueReferences: list<Shapes\RoutingProfileQueueReference>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
