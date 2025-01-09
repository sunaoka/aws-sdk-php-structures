<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateConnectionOnInterconnect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bandwidth
 * @property string $connectionName
 * @property string $ownerAccount
 * @property string $interconnectId
 * @property int $vlan
 */
class AllocateConnectionOnInterconnectRequest extends Request
{
    /**
     * @param array{
     *     bandwidth: string,
     *     connectionName: string,
     *     ownerAccount: string,
     *     interconnectId: string,
     *     vlan: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
