<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'off'|'block-bidirectional'|'block-ingress'|null $InternetGatewayBlockMode
 */
class BlockPublicAccessStates extends Shape
{
    /**
     * @param array{InternetGatewayBlockMode?: 'off'|'block-bidirectional'|'block-ingress'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
