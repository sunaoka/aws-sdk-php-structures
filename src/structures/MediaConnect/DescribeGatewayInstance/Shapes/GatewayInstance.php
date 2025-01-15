<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeGatewayInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVAILABLE'|'LOCKED' $BridgePlacement
 * @property 'CONNECTED'|'DISCONNECTED' $ConnectionStatus
 * @property string $GatewayArn
 * @property string $GatewayInstanceArn
 * @property string $InstanceId
 * @property list<MessageDetail>|null $InstanceMessages
 * @property 'REGISTERING'|'ACTIVE'|'DEREGISTERING'|'DEREGISTERED'|'REGISTRATION_ERROR'|'DEREGISTRATION_ERROR' $InstanceState
 * @property int $RunningBridgeCount
 */
class GatewayInstance extends Shape
{
    /**
     * @param array{
     *     BridgePlacement: 'AVAILABLE'|'LOCKED',
     *     ConnectionStatus: 'CONNECTED'|'DISCONNECTED',
     *     GatewayArn: string,
     *     GatewayInstanceArn: string,
     *     InstanceId: string,
     *     InstanceMessages?: list<MessageDetail>|null,
     *     InstanceState: 'REGISTERING'|'ACTIVE'|'DEREGISTERING'|'DEREGISTERED'|'REGISTRATION_ERROR'|'DEREGISTRATION_ERROR',
     *     RunningBridgeCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
