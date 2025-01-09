<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueOutboundCallerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property Shapes\OutboundCallerConfig $OutboundCallerConfig
 */
class UpdateQueueOutboundCallerConfigRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     OutboundCallerConfig: Shapes\OutboundCallerConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
