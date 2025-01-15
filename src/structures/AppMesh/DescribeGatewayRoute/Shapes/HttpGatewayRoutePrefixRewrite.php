<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $defaultPrefix
 * @property string|null $value
 */
class HttpGatewayRoutePrefixRewrite extends Shape
{
    /**
     * @param array{
     *     defaultPrefix?: 'ENABLED'|'DISABLED'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
