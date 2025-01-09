<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MulticastIp
 * @property MulticastSourceSettings $MulticastSourceSettings
 * @property string $Name
 * @property string $NetworkName
 * @property int $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp' $Protocol
 */
class AddBridgeNetworkSourceRequest extends Shape
{
    /**
     * @param array{
     *     MulticastIp: string,
     *     MulticastSourceSettings?: MulticastSourceSettings,
     *     Name: string,
     *     NetworkName: string,
     *     Port: int,
     *     Protocol: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
