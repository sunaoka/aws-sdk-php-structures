<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AddEgressGatewayBridgeRequest|null $EgressGatewayBridge
 * @property Shapes\AddIngressGatewayBridgeRequest|null $IngressGatewayBridge
 * @property string $Name
 * @property list<Shapes\AddBridgeOutputRequest>|null $Outputs
 * @property string $PlacementArn
 * @property Shapes\FailoverConfig|null $SourceFailoverConfig
 * @property list<Shapes\AddBridgeSourceRequest> $Sources
 */
class CreateBridgeRequest extends Request
{
    /**
     * @param array{
     *     EgressGatewayBridge?: Shapes\AddEgressGatewayBridgeRequest|null,
     *     IngressGatewayBridge?: Shapes\AddIngressGatewayBridgeRequest|null,
     *     Name: string,
     *     Outputs?: list<Shapes\AddBridgeOutputRequest>|null,
     *     PlacementArn: string,
     *     SourceFailoverConfig?: Shapes\FailoverConfig|null,
     *     Sources: list<Shapes\AddBridgeSourceRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
