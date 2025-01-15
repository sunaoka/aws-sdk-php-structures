<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BridgeArn
 * @property list<MessageDetail>|null $BridgeMessages
 * @property 'CREATING'|'STANDBY'|'STARTING'|'DEPLOYING'|'ACTIVE'|'STOPPING'|'DELETING'|'DELETED'|'START_FAILED'|'START_PENDING'|'STOP_FAILED'|'UPDATING' $BridgeState
 * @property EgressGatewayBridge|null $EgressGatewayBridge
 * @property IngressGatewayBridge|null $IngressGatewayBridge
 * @property string $Name
 * @property list<BridgeOutput>|null $Outputs
 * @property string $PlacementArn
 * @property FailoverConfig|null $SourceFailoverConfig
 * @property list<BridgeSource>|null $Sources
 */
class Bridge extends Shape
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     BridgeMessages?: list<MessageDetail>|null,
     *     BridgeState: 'CREATING'|'STANDBY'|'STARTING'|'DEPLOYING'|'ACTIVE'|'STOPPING'|'DELETING'|'DELETED'|'START_FAILED'|'START_PENDING'|'STOP_FAILED'|'UPDATING',
     *     EgressGatewayBridge?: EgressGatewayBridge|null,
     *     IngressGatewayBridge?: IngressGatewayBridge|null,
     *     Name: string,
     *     Outputs?: list<BridgeOutput>|null,
     *     PlacementArn: string,
     *     SourceFailoverConfig?: FailoverConfig|null,
     *     Sources?: list<BridgeSource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
