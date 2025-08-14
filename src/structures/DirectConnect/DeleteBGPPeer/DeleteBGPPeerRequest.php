<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteBGPPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $virtualInterfaceId
 * @property int|null $asn
 * @property int|null $asnLong
 * @property string|null $customerAddress
 * @property string|null $bgpPeerId
 */
class DeleteBGPPeerRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId?: string|null,
     *     asn?: int|null,
     *     asnLong?: int|null,
     *     customerAddress?: string|null,
     *     bgpPeerId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
