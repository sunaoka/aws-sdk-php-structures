<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateEncryption|null $Decryption
 * @property string|null $Description
 * @property string|null $EntitlementArn
 * @property string $FlowArn
 * @property int|null $IngestPort
 * @property int|null $MaxBitrate
 * @property int|null $MaxLatency
 * @property int|null $MaxSyncBuffer
 * @property list<Shapes\MediaStreamSourceConfigurationRequest>|null $MediaStreamSourceConfigurations
 * @property int|null $MinLatency
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|null $Protocol
 * @property int|null $SenderControlPort
 * @property string|null $SenderIpAddress
 * @property string $SourceArn
 * @property string|null $SourceListenerAddress
 * @property int|null $SourceListenerPort
 * @property string|null $StreamId
 * @property string|null $VpcInterfaceName
 * @property string|null $WhitelistCidr
 * @property Shapes\UpdateGatewayBridgeSourceRequest|null $GatewayBridgeSource
 */
class UpdateFlowSourceRequest extends Request
{
    /**
     * @param array{
     *     Decryption?: Shapes\UpdateEncryption|null,
     *     Description?: string|null,
     *     EntitlementArn?: string|null,
     *     FlowArn: string,
     *     IngestPort?: int|null,
     *     MaxBitrate?: int|null,
     *     MaxLatency?: int|null,
     *     MaxSyncBuffer?: int|null,
     *     MediaStreamSourceConfigurations?: list<Shapes\MediaStreamSourceConfigurationRequest>|null,
     *     MinLatency?: int|null,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|null,
     *     SenderControlPort?: int|null,
     *     SenderIpAddress?: string|null,
     *     SourceArn: string,
     *     SourceListenerAddress?: string|null,
     *     SourceListenerPort?: int|null,
     *     StreamId?: string|null,
     *     VpcInterfaceName?: string|null,
     *     WhitelistCidr?: string|null,
     *     GatewayBridgeSource?: Shapes\UpdateGatewayBridgeSourceRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
