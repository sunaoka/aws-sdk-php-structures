<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueOutboundEmailConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property Shapes\OutboundEmailConfig $OutboundEmailConfig
 */
class UpdateQueueOutboundEmailConfigRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     OutboundEmailConfig: Shapes\OutboundEmailConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
