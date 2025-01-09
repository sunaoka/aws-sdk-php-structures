<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BridgeArn
 * @property list<MessageDetail> $BridgeMessages
 * @property 'CREATING'|'STANDBY'|'STARTING'|'DEPLOYING'|'ACTIVE'|'STOPPING'|'DELETING'|'DELETED'|'START_FAILED'|'START_PENDING'|'STOP_FAILED'|'UPDATING' $BridgeState
 * @property EgressGatewayBridge $EgressGatewayBridge
 * @property IngressGatewayBridge $IngressGatewayBridge
 * @property string $Name
 * @property list<BridgeOutput> $Outputs
 * @property string $PlacementArn
 * @property FailoverConfig $SourceFailoverConfig
 * @property list<BridgeSource> $Sources
 */
class Bridge extends Shape
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     BridgeMessages?: list<MessageDetail>,
     *     BridgeState: 'CREATING'|'STANDBY'|'STARTING'|'DEPLOYING'|'ACTIVE'|'STOPPING'|'DELETING'|'DELETED'|'START_FAILED'|'START_PENDING'|'STOP_FAILED'|'UPDATING',
     *     EgressGatewayBridge?: EgressGatewayBridge,
     *     IngressGatewayBridge?: IngressGatewayBridge,
     *     Name: string,
     *     Outputs?: list<BridgeOutput>,
     *     PlacementArn: string,
     *     SourceFailoverConfig?: FailoverConfig,
     *     Sources?: list<BridgeSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
