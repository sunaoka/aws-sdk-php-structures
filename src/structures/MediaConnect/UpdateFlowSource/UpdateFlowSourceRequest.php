<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateEncryption $Decryption
 * @property string $Description
 * @property string $EntitlementArn
 * @property string $FlowArn
 * @property int $IngestPort
 * @property int $MaxBitrate
 * @property int $MaxLatency
 * @property int $MaxSyncBuffer
 * @property list<Shapes\MediaStreamSourceConfigurationRequest> $MediaStreamSourceConfigurations
 * @property int $MinLatency
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp' $Protocol
 * @property int $SenderControlPort
 * @property string $SenderIpAddress
 * @property string $SourceArn
 * @property string $SourceListenerAddress
 * @property int $SourceListenerPort
 * @property string $StreamId
 * @property string $VpcInterfaceName
 * @property string $WhitelistCidr
 * @property Shapes\UpdateGatewayBridgeSourceRequest $GatewayBridgeSource
 */
class UpdateFlowSourceRequest extends Request
{
    /**
     * @param array{
     *     Decryption?: Shapes\UpdateEncryption,
     *     Description?: string,
     *     EntitlementArn?: string,
     *     FlowArn: string,
     *     IngestPort?: int,
     *     MaxBitrate?: int,
     *     MaxLatency?: int,
     *     MaxSyncBuffer?: int,
     *     MediaStreamSourceConfigurations?: list<Shapes\MediaStreamSourceConfigurationRequest>,
     *     MinLatency?: int,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp',
     *     SenderControlPort?: int,
     *     SenderIpAddress?: string,
     *     SourceArn: string,
     *     SourceListenerAddress?: string,
     *     SourceListenerPort?: int,
     *     StreamId?: string,
     *     VpcInterfaceName?: string,
     *     WhitelistCidr?: string,
     *     GatewayBridgeSource?: Shapes\UpdateGatewayBridgeSourceRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
