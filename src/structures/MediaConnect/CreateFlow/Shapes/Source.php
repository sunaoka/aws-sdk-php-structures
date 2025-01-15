<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DataTransferSubscriberFeePercent
 * @property Encryption|null $Decryption
 * @property string|null $Description
 * @property string|null $EntitlementArn
 * @property string|null $IngestIp
 * @property int|null $IngestPort
 * @property list<MediaStreamSourceConfiguration>|null $MediaStreamSourceConfigurations
 * @property string $Name
 * @property int|null $SenderControlPort
 * @property string|null $SenderIpAddress
 * @property string $SourceArn
 * @property Transport|null $Transport
 * @property string|null $VpcInterfaceName
 * @property string|null $WhitelistCidr
 * @property GatewayBridgeSource|null $GatewayBridgeSource
 */
class Source extends Shape
{
    /**
     * @param array{
     *     DataTransferSubscriberFeePercent?: int|null,
     *     Decryption?: Encryption|null,
     *     Description?: string|null,
     *     EntitlementArn?: string|null,
     *     IngestIp?: string|null,
     *     IngestPort?: int|null,
     *     MediaStreamSourceConfigurations?: list<MediaStreamSourceConfiguration>|null,
     *     Name: string,
     *     SenderControlPort?: int|null,
     *     SenderIpAddress?: string|null,
     *     SourceArn: string,
     *     Transport?: Transport|null,
     *     VpcInterfaceName?: string|null,
     *     WhitelistCidr?: string|null,
     *     GatewayBridgeSource?: GatewayBridgeSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
