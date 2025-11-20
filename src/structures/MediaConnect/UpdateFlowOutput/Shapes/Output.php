<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DataTransferSubscriberFeePercent
 * @property string|null $Description
 * @property string|null $Destination
 * @property Encryption|null $Encryption
 * @property string|null $EntitlementArn
 * @property string|null $ListenerAddress
 * @property string|null $MediaLiveInputArn
 * @property list<MediaStreamOutputConfiguration>|null $MediaStreamOutputConfigurations
 * @property string $Name
 * @property string $OutputArn
 * @property int|null $Port
 * @property Transport|null $Transport
 * @property VpcInterfaceAttachment|null $VpcInterfaceAttachment
 * @property string|null $BridgeArn
 * @property list<int>|null $BridgePorts
 * @property 'ENABLED'|'DISABLED'|null $OutputStatus
 * @property string|null $PeerIpAddress
 * @property 'ENABLED'|'DISABLED'|null $RouterIntegrationState
 * @property FlowTransitEncryption|null $RouterIntegrationTransitEncryption
 * @property string|null $ConnectedRouterInputArn
 */
class Output extends Shape
{
    /**
     * @param array{
     *     DataTransferSubscriberFeePercent?: int|null,
     *     Description?: string|null,
     *     Destination?: string|null,
     *     Encryption?: Encryption|null,
     *     EntitlementArn?: string|null,
     *     ListenerAddress?: string|null,
     *     MediaLiveInputArn?: string|null,
     *     MediaStreamOutputConfigurations?: list<MediaStreamOutputConfiguration>|null,
     *     Name: string,
     *     OutputArn: string,
     *     Port?: int|null,
     *     Transport?: Transport|null,
     *     VpcInterfaceAttachment?: VpcInterfaceAttachment|null,
     *     BridgeArn?: string|null,
     *     BridgePorts?: list<int>|null,
     *     OutputStatus?: 'ENABLED'|'DISABLED'|null,
     *     PeerIpAddress?: string|null,
     *     RouterIntegrationState?: 'ENABLED'|'DISABLED'|null,
     *     RouterIntegrationTransitEncryption?: FlowTransitEncryption|null,
     *     ConnectedRouterInputArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
