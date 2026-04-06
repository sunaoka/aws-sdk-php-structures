<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CidrAllowList
 * @property string|null $Description
 * @property string|null $Destination
 * @property Shapes\UpdateEncryption|null $Encryption
 * @property string $FlowArn
 * @property int|null $MaxLatency
 * @property list<Shapes\MediaStreamOutputConfigurationRequest>|null $MediaStreamOutputConfigurations
 * @property int|null $MinLatency
 * @property string $OutputArn
 * @property int|null $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq'|null $Protocol
 * @property string|null $RemoteId
 * @property int|null $SenderControlPort
 * @property string|null $SenderIpAddress
 * @property int|null $SmoothingLatency
 * @property string|null $StreamId
 * @property Shapes\VpcInterfaceAttachment|null $VpcInterfaceAttachment
 * @property 'ENABLED'|'DISABLED'|null $OutputStatus
 * @property string|null $NdiProgramName
 * @property int|null $NdiSpeedHqQuality
 * @property 'ENABLED'|'DISABLED'|null $RouterIntegrationState
 * @property Shapes\FlowTransitEncryption|null $RouterIntegrationTransitEncryption
 */
class UpdateFlowOutputRequest extends Request
{
    /**
     * @param array{
     *     CidrAllowList?: list<string>|null,
     *     Description?: string|null,
     *     Destination?: string|null,
     *     Encryption?: Shapes\UpdateEncryption|null,
     *     FlowArn: string,
     *     MaxLatency?: int|null,
     *     MediaStreamOutputConfigurations?: list<Shapes\MediaStreamOutputConfigurationRequest>|null,
     *     MinLatency?: int|null,
     *     OutputArn: string,
     *     Port?: int|null,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq'|null,
     *     RemoteId?: string|null,
     *     SenderControlPort?: int|null,
     *     SenderIpAddress?: string|null,
     *     SmoothingLatency?: int|null,
     *     StreamId?: string|null,
     *     VpcInterfaceAttachment?: Shapes\VpcInterfaceAttachment|null,
     *     OutputStatus?: 'ENABLED'|'DISABLED'|null,
     *     NdiProgramName?: string|null,
     *     NdiSpeedHqQuality?: int|null,
     *     RouterIntegrationState?: 'ENABLED'|'DISABLED'|null,
     *     RouterIntegrationTransitEncryption?: Shapes\FlowTransitEncryption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
