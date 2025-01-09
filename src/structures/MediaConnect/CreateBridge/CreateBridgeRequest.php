<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AddEgressGatewayBridgeRequest $EgressGatewayBridge
 * @property Shapes\AddIngressGatewayBridgeRequest $IngressGatewayBridge
 * @property string $Name
 * @property list<Shapes\AddBridgeOutputRequest> $Outputs
 * @property string $PlacementArn
 * @property Shapes\FailoverConfig $SourceFailoverConfig
 * @property list<Shapes\AddBridgeSourceRequest> $Sources
 */
class CreateBridgeRequest extends Request
{
    /**
     * @param array{
     *     EgressGatewayBridge?: Shapes\AddEgressGatewayBridgeRequest,
     *     IngressGatewayBridge?: Shapes\AddIngressGatewayBridgeRequest,
     *     Name: string,
     *     Outputs?: list<Shapes\AddBridgeOutputRequest>,
     *     PlacementArn: string,
     *     SourceFailoverConfig?: Shapes\FailoverConfig,
     *     Sources: list<Shapes\AddBridgeSourceRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
