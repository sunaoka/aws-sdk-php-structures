<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateClusterPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $State
 * @property string|null $InUse
 */
class ClusterPeerAuthenticationStatus extends Shape
{
    /**
     * @param array{
     *     State?: string|null,
     *     InUse?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
