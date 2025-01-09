<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PeerAsn
 */
class BgpOptions extends Shape
{
    /**
     * @param array{PeerAsn?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
