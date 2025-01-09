<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSubnet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'off'|'block-bidirectional'|'block-ingress' $InternetGatewayBlockMode
 */
class BlockPublicAccessStates extends Shape
{
    /**
     * @param array{InternetGatewayBlockMode?: 'off'|'block-bidirectional'|'block-ingress'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
