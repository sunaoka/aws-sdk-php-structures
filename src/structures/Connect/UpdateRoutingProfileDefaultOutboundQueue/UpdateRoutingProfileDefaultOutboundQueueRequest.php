<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileDefaultOutboundQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RoutingProfileId
 * @property string $DefaultOutboundQueueId
 */
class UpdateRoutingProfileDefaultOutboundQueueRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RoutingProfileId: string,
     *     DefaultOutboundQueueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
