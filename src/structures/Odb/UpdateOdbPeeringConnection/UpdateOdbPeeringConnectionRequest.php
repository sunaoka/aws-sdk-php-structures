<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateOdbPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $odbPeeringConnectionId
 * @property string|null $displayName
 * @property list<string>|null $peerNetworkCidrsToBeAdded
 * @property list<string>|null $peerNetworkCidrsToBeRemoved
 */
class UpdateOdbPeeringConnectionRequest extends Request
{
    /**
     * @param array{
     *     odbPeeringConnectionId: string,
     *     displayName?: string|null,
     *     peerNetworkCidrsToBeAdded?: list<string>|null,
     *     peerNetworkCidrsToBeRemoved?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
