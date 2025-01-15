<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeVpcIngressConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property string|null $VpcEndpointId
 */
class IngressVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     VpcEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
