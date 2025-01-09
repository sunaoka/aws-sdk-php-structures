<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateQueueQuickConnects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property list<string> $QuickConnectIds
 */
class DisassociateQueueQuickConnectsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     QuickConnectIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
