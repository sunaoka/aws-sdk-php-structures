<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MulticastIp
 * @property MulticastSourceSettings|null $MulticastSourceSettings
 * @property string|null $NetworkName
 * @property int|null $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq'|null $Protocol
 */
class UpdateBridgeNetworkSourceRequest extends Shape
{
    /**
     * @param array{
     *     MulticastIp?: string|null,
     *     MulticastSourceSettings?: MulticastSourceSettings|null,
     *     NetworkName?: string|null,
     *     Port?: int|null,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'|'ndi-speed-hq'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
