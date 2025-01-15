<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateHostedConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $ownerAccount
 * @property string $bandwidth
 * @property string $connectionName
 * @property int $vlan
 * @property list<Shapes\Tag>|null $tags
 */
class AllocateHostedConnectionRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     ownerAccount: string,
     *     bandwidth: string,
     *     connectionName: string,
     *     vlan: int,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
