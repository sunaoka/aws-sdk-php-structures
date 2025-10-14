<?php

namespace Sunaoka\Aws\Structures\Odb\CreateOdbPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $odbNetworkId
 * @property string $peerNetworkId
 * @property string|null $displayName
 * @property list<string>|null $peerNetworkCidrsToBeAdded
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateOdbPeeringConnectionRequest extends Request
{
    /**
     * @param array{
     *     odbNetworkId: string,
     *     peerNetworkId: string,
     *     displayName?: string|null,
     *     peerNetworkCidrsToBeAdded?: list<string>|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
