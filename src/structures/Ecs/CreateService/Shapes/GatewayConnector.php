<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $portName
 * @property GatewayConnectorHealthCheck|null $healthCheck
 * @property GatewayConnectorFilters|null $filters
 */
class GatewayConnector extends Shape
{
    /**
     * @param array{
     *     portName: string,
     *     healthCheck?: GatewayConnectorHealthCheck|null,
     *     filters?: GatewayConnectorFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
