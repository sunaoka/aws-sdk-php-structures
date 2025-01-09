<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property Shapes\UpdateEgressGatewayBridgeRequest $EgressGatewayBridge
 * @property Shapes\UpdateIngressGatewayBridgeRequest $IngressGatewayBridge
 * @property Shapes\UpdateFailoverConfig $SourceFailoverConfig
 */
class UpdateBridgeRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     EgressGatewayBridge?: Shapes\UpdateEgressGatewayBridgeRequest,
     *     IngressGatewayBridge?: Shapes\UpdateIngressGatewayBridgeRequest,
     *     SourceFailoverConfig?: Shapes\UpdateFailoverConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
