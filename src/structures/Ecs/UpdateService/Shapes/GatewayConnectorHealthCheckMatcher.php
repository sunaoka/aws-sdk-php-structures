<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $httpCode
 * @property string|null $grpcCode
 */
class GatewayConnectorHealthCheckMatcher extends Shape
{
    /**
     * @param array{
     *     httpCode?: string|null,
     *     grpcCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
