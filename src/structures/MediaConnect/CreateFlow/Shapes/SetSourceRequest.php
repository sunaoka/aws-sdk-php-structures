<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Encryption|null $Decryption
 * @property string|null $Description
 * @property string|null $EntitlementArn
 * @property int|null $IngestPort
 * @property int|null $MaxBitrate
 * @property int|null $MaxLatency
 * @property int|null $MaxSyncBuffer
 * @property list<MediaStreamSourceConfigurationRequest>|null $MediaStreamSourceConfigurations
 * @property int|null $MinLatency
 * @property string|null $Name
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq'|null $Protocol
 * @property int|null $SenderControlPort
 * @property string|null $SenderIpAddress
 * @property string|null $SourceListenerAddress
 * @property int|null $SourceListenerPort
 * @property string|null $StreamId
 * @property string|null $VpcInterfaceName
 * @property string|null $WhitelistCidr
 * @property SetGatewayBridgeSourceRequest|null $GatewayBridgeSource
 * @property array<string, string>|null $SourceTags
 */
class SetSourceRequest extends Shape
{
    /**
     * @param array{
     *     Decryption?: Encryption|null,
     *     Description?: string|null,
     *     EntitlementArn?: string|null,
     *     IngestPort?: int|null,
     *     MaxBitrate?: int|null,
     *     MaxLatency?: int|null,
     *     MaxSyncBuffer?: int|null,
     *     MediaStreamSourceConfigurations?: list<MediaStreamSourceConfigurationRequest>|null,
     *     MinLatency?: int|null,
     *     Name?: string|null,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq'|null,
     *     SenderControlPort?: int|null,
     *     SenderIpAddress?: string|null,
     *     SourceListenerAddress?: string|null,
     *     SourceListenerPort?: int|null,
     *     StreamId?: string|null,
     *     VpcInterfaceName?: string|null,
     *     WhitelistCidr?: string|null,
     *     GatewayBridgeSource?: SetGatewayBridgeSourceRequest|null,
     *     SourceTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
