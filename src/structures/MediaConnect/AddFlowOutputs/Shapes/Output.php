<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowOutputs\Shapes;

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
     *     OutputStatus?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
