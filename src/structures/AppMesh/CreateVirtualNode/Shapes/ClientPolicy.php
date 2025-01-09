<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientPolicyTls $tls
 */
class ClientPolicy extends Shape
{
    /**
     * @param array{tls?: ClientPolicyTls} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
