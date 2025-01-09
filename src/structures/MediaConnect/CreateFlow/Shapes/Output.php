<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataTransferSubscriberFeePercent
 * @property string $Description
 * @property string $Destination
 * @property Encryption $Encryption
 * @property string $EntitlementArn
 * @property string $ListenerAddress
 * @property string $MediaLiveInputArn
 * @property list<MediaStreamOutputConfiguration> $MediaStreamOutputConfigurations
 * @property string $Name
 * @property string $OutputArn
 * @property int $Port
 * @property Transport $Transport
 * @property VpcInterfaceAttachment $VpcInterfaceAttachment
 * @property string $BridgeArn
 * @property list<int> $BridgePorts
 * @property 'ENABLED'|'DISABLED' $OutputStatus
 */
class Output extends Shape
{
    /**
     * @param array{
     *     DataTransferSubscriberFeePercent?: int,
     *     Description?: string,
     *     Destination?: string,
     *     Encryption?: Encryption,
     *     EntitlementArn?: string,
     *     ListenerAddress?: string,
     *     MediaLiveInputArn?: string,
     *     MediaStreamOutputConfigurations?: list<MediaStreamOutputConfiguration>,
     *     Name: string,
     *     OutputArn: string,
     *     Port?: int,
     *     Transport?: Transport,
     *     VpcInterfaceAttachment?: VpcInterfaceAttachment,
     *     BridgeArn?: string,
     *     BridgePorts?: list<int>,
     *     OutputStatus?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
