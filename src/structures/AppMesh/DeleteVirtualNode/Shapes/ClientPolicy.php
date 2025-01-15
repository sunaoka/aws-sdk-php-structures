<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientPolicyTls|null $tls
 */
class ClientPolicy extends Shape
{
    /**
     * @param array{tls?: ClientPolicyTls|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
