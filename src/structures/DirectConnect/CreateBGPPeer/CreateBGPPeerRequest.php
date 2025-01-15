<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateBGPPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $virtualInterfaceId
 * @property Shapes\NewBGPPeer|null $newBGPPeer
 */
class CreateBGPPeerRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId?: string|null,
     *     newBGPPeer?: Shapes\NewBGPPeer|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
