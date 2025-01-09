<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CidrAllowList
 * @property string $Description
 * @property string $Destination
 * @property Encryption $Encryption
 * @property int $MaxLatency
 * @property list<MediaStreamOutputConfigurationRequest> $MediaStreamOutputConfigurations
 * @property int $MinLatency
 * @property string $Name
 * @property int $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp' $Protocol
 * @property string $RemoteId
 * @property int $SenderControlPort
 * @property int $SmoothingLatency
 * @property string $StreamId
 * @property VpcInterfaceAttachment $VpcInterfaceAttachment
 * @property 'ENABLED'|'DISABLED' $OutputStatus
 */
class AddOutputRequest extends Shape
{
    /**
     * @param array{
     *     CidrAllowList?: list<string>,
     *     Description?: string,
     *     Destination?: string,
     *     Encryption?: Encryption,
     *     MaxLatency?: int,
     *     MediaStreamOutputConfigurations?: list<MediaStreamOutputConfigurationRequest>,
     *     MinLatency?: int,
     *     Name?: string,
     *     Port?: int,
     *     Protocol: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp',
     *     RemoteId?: string,
     *     SenderControlPort?: int,
     *     SmoothingLatency?: int,
     *     StreamId?: string,
     *     VpcInterfaceAttachment?: VpcInterfaceAttachment,
     *     OutputStatus?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
