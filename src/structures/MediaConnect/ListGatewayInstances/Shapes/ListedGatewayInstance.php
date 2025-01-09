<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListGatewayInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayArn
 * @property string $GatewayInstanceArn
 * @property string $InstanceId
 * @property 'REGISTERING'|'ACTIVE'|'DEREGISTERING'|'DEREGISTERED'|'REGISTRATION_ERROR'|'DEREGISTRATION_ERROR' $InstanceState
 */
class ListedGatewayInstance extends Shape
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     GatewayInstanceArn: string,
     *     InstanceId: string,
     *     InstanceState?: 'REGISTERING'|'ACTIVE'|'DEREGISTERING'|'DEREGISTERED'|'REGISTRATION_ERROR'|'DEREGISTRATION_ERROR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
