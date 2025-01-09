<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CidrAllowList
 * @property string $Description
 * @property string $Destination
 * @property Shapes\UpdateEncryption $Encryption
 * @property string $FlowArn
 * @property int $MaxLatency
 * @property list<Shapes\MediaStreamOutputConfigurationRequest> $MediaStreamOutputConfigurations
 * @property int $MinLatency
 * @property string $OutputArn
 * @property int $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp' $Protocol
 * @property string $RemoteId
 * @property int $SenderControlPort
 * @property string $SenderIpAddress
 * @property int $SmoothingLatency
 * @property string $StreamId
 * @property Shapes\VpcInterfaceAttachment $VpcInterfaceAttachment
 * @property 'ENABLED'|'DISABLED' $OutputStatus
 */
class UpdateFlowOutputRequest extends Request
{
    /**
     * @param array{
     *     CidrAllowList?: list<string>,
     *     Description?: string,
     *     Destination?: string,
     *     Encryption?: Shapes\UpdateEncryption,
     *     FlowArn: string,
     *     MaxLatency?: int,
     *     MediaStreamOutputConfigurations?: list<Shapes\MediaStreamOutputConfigurationRequest>,
     *     MinLatency?: int,
     *     OutputArn: string,
     *     Port?: int,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp',
     *     RemoteId?: string,
     *     SenderControlPort?: int,
     *     SenderIpAddress?: string,
     *     SmoothingLatency?: int,
     *     StreamId?: string,
     *     VpcInterfaceAttachment?: Shapes\VpcInterfaceAttachment,
     *     OutputStatus?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
