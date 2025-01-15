<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CidrAllowList
 * @property string|null $Description
 * @property string|null $Destination
 * @property Encryption|null $Encryption
 * @property int|null $MaxLatency
 * @property list<MediaStreamOutputConfigurationRequest>|null $MediaStreamOutputConfigurations
 * @property int|null $MinLatency
 * @property string|null $Name
 * @property int|null $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp' $Protocol
 * @property string|null $RemoteId
 * @property int|null $SenderControlPort
 * @property int|null $SmoothingLatency
 * @property string|null $StreamId
 * @property VpcInterfaceAttachment|null $VpcInterfaceAttachment
 * @property 'ENABLED'|'DISABLED'|null $OutputStatus
 */
class AddOutputRequest extends Shape
{
    /**
     * @param array{
     *     CidrAllowList?: list<string>|null,
     *     Description?: string|null,
     *     Destination?: string|null,
     *     Encryption?: Encryption|null,
     *     MaxLatency?: int|null,
     *     MediaStreamOutputConfigurations?: list<MediaStreamOutputConfigurationRequest>|null,
     *     MinLatency?: int|null,
     *     Name?: string|null,
     *     Port?: int|null,
     *     Protocol: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp',
     *     RemoteId?: string|null,
     *     SenderControlPort?: int|null,
     *     SmoothingLatency?: int|null,
     *     StreamId?: string|null,
     *     VpcInterfaceAttachment?: VpcInterfaceAttachment|null,
     *     OutputStatus?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
