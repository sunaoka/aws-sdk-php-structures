<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataTransferSubscriberFeePercent
 * @property Encryption $Decryption
 * @property string $Description
 * @property string $EntitlementArn
 * @property string $IngestIp
 * @property int $IngestPort
 * @property list<MediaStreamSourceConfiguration> $MediaStreamSourceConfigurations
 * @property string $Name
 * @property int $SenderControlPort
 * @property string $SenderIpAddress
 * @property string $SourceArn
 * @property Transport $Transport
 * @property string $VpcInterfaceName
 * @property string $WhitelistCidr
 * @property GatewayBridgeSource $GatewayBridgeSource
 */
class Source extends Shape
{
    /**
     * @param array{
     *     DataTransferSubscriberFeePercent?: int,
     *     Decryption?: Encryption,
     *     Description?: string,
     *     EntitlementArn?: string,
     *     IngestIp?: string,
     *     IngestPort?: int,
     *     MediaStreamSourceConfigurations?: list<MediaStreamSourceConfiguration>,
     *     Name: string,
     *     SenderControlPort?: int,
     *     SenderIpAddress?: string,
     *     SourceArn: string,
     *     Transport?: Transport,
     *     VpcInterfaceName?: string,
     *     WhitelistCidr?: string,
     *     GatewayBridgeSource?: GatewayBridgeSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
