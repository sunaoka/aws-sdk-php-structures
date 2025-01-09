<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcIngressConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcIngressConnectionArn
 * @property string $ServiceArn
 */
class VpcIngressConnectionSummary extends Shape
{
    /**
     * @param array{
     *     VpcIngressConnectionArn?: string,
     *     ServiceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
