<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcIngressConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcIngressConnectionArn
 * @property string|null $ServiceArn
 */
class VpcIngressConnectionSummary extends Shape
{
    /**
     * @param array{
     *     VpcIngressConnectionArn?: string|null,
     *     ServiceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
