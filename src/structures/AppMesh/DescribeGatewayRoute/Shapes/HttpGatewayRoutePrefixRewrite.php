<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $defaultPrefix
 * @property string $value
 */
class HttpGatewayRoutePrefixRewrite extends Shape
{
    /**
     * @param array{
     *     defaultPrefix?: 'ENABLED'|'DISABLED',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
