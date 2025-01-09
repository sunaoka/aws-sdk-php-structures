<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateBGPPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property Shapes\NewBGPPeer $newBGPPeer
 */
class CreateBGPPeerRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId?: string,
     *     newBGPPeer?: Shapes\NewBGPPeer
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
