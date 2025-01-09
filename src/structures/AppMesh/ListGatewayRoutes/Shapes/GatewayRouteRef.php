<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListGatewayRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $gatewayRouteName
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $meshName
 * @property string $meshOwner
 * @property string $resourceOwner
 * @property int $version
 * @property string $virtualGatewayName
 */
class GatewayRouteRef extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     gatewayRouteName: string,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     meshName: string,
     *     meshOwner: string,
     *     resourceOwner: string,
     *     version: int,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
