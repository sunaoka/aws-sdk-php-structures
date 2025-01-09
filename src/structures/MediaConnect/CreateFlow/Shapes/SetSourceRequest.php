<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Encryption $Decryption
 * @property string $Description
 * @property string $EntitlementArn
 * @property int $IngestPort
 * @property int $MaxBitrate
 * @property int $MaxLatency
 * @property int $MaxSyncBuffer
 * @property list<MediaStreamSourceConfigurationRequest> $MediaStreamSourceConfigurations
 * @property int $MinLatency
 * @property string $Name
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp' $Protocol
 * @property int $SenderControlPort
 * @property string $SenderIpAddress
 * @property string $SourceListenerAddress
 * @property int $SourceListenerPort
 * @property string $StreamId
 * @property string $VpcInterfaceName
 * @property string $WhitelistCidr
 * @property SetGatewayBridgeSourceRequest $GatewayBridgeSource
 */
class SetSourceRequest extends Shape
{
    /**
     * @param array{
     *     Decryption?: Encryption,
     *     Description?: string,
     *     EntitlementArn?: string,
     *     IngestPort?: int,
     *     MaxBitrate?: int,
     *     MaxLatency?: int,
     *     MaxSyncBuffer?: int,
     *     MediaStreamSourceConfigurations?: list<MediaStreamSourceConfigurationRequest>,
     *     MinLatency?: int,
     *     Name?: string,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp',
     *     SenderControlPort?: int,
     *     SenderIpAddress?: string,
     *     SourceListenerAddress?: string,
     *     SourceListenerPort?: int,
     *     StreamId?: string,
     *     VpcInterfaceName?: string,
     *     WhitelistCidr?: string,
     *     GatewayBridgeSource?: SetGatewayBridgeSourceRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
