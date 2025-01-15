<?php

namespace Sunaoka\Aws\Structures\Connect\TransferContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string|null $QueueId
 * @property string|null $UserId
 * @property string $ContactFlowId
 * @property string|null $ClientToken
 */
class TransferContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     QueueId?: string|null,
     *     UserId?: string|null,
     *     ContactFlowId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
