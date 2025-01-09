<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MulticastIp
 * @property MulticastSourceSettings $MulticastSourceSettings
 * @property string $NetworkName
 * @property int $Port
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp' $Protocol
 */
class UpdateBridgeNetworkSourceRequest extends Shape
{
    /**
     * @param array{
     *     MulticastIp?: string,
     *     MulticastSourceSettings?: MulticastSourceSettings,
     *     NetworkName?: string,
     *     Port?: int,
     *     Protocol?: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
