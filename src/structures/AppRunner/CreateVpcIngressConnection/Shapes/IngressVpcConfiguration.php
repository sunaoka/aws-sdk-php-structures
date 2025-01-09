<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateVpcIngressConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property string $VpcEndpointId
 */
class IngressVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     VpcId?: string,
     *     VpcEndpointId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
