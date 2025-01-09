<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property 'ENABLED'|'DISABLED' $Status
 */
class UpdateQueueStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     Status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
