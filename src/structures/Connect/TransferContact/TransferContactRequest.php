<?php

namespace Sunaoka\Aws\Structures\Connect\TransferContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string $QueueId
 * @property string $UserId
 * @property string $ContactFlowId
 * @property string $ClientToken
 */
class TransferContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     QueueId?: string,
     *     UserId?: string,
     *     ContactFlowId: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
