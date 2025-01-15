<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property string|null $NetworkName
 * @property int|null $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|null $Protocol
 * @property int|null $Ttl
 */
class UpdateBridgeNetworkOutputRequest extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     NetworkName?: string|null,
     *     Port?: int|null,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|null,
     *     Ttl?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
