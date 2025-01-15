<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property Shapes\UpdateEgressGatewayBridgeRequest|null $EgressGatewayBridge
 * @property Shapes\UpdateIngressGatewayBridgeRequest|null $IngressGatewayBridge
 * @property Shapes\UpdateFailoverConfig|null $SourceFailoverConfig
 */
class UpdateBridgeRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     EgressGatewayBridge?: Shapes\UpdateEgressGatewayBridgeRequest|null,
     *     IngressGatewayBridge?: Shapes\UpdateIngressGatewayBridgeRequest|null,
     *     SourceFailoverConfig?: Shapes\UpdateFailoverConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
