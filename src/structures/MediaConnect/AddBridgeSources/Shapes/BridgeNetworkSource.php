<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MulticastIp
 * @property MulticastSourceSettings|null $MulticastSourceSettings
 * @property string $Name
 * @property string $NetworkName
 * @property int $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq' $Protocol
 */
class BridgeNetworkSource extends Shape
{
    /**
     * @param array{
     *     MulticastIp: string,
     *     MulticastSourceSettings?: MulticastSourceSettings|null,
     *     Name: string,
     *     NetworkName: string,
     *     Port: int,
     *     Protocol: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
