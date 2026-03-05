<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateQueueEmailAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property list<Shapes\EmailAddressConfig> $EmailAddressesConfig
 * @property string|null $ClientToken
 */
class AssociateQueueEmailAddressesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     EmailAddressesConfig: list<Shapes\EmailAddressConfig>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
