<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateQueueEmailAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property list<string> $EmailAddressesId
 * @property string|null $ClientToken
 */
class DisassociateQueueEmailAddressesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     EmailAddressesId: list<string>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
