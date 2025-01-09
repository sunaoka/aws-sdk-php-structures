<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property string $NetworkName
 * @property int $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp' $Protocol
 * @property int $Ttl
 */
class UpdateBridgeNetworkOutputRequest extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string,
     *     NetworkName?: string,
     *     Port?: int,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp',
     *     Ttl?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
