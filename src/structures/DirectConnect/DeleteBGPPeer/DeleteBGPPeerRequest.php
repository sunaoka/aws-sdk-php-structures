<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteBGPPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property int $asn
 * @property string $customerAddress
 * @property string $bgpPeerId
 */
class DeleteBGPPeerRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId?: string,
     *     asn?: int,
     *     customerAddress?: string,
     *     bgpPeerId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
