<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CidrAllowList
 * @property int $MaxBitrate
 * @property int $MaxLatency
 * @property int $MaxSyncBuffer
 * @property int $MinLatency
 * @property 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp' $Protocol
 * @property string $RemoteId
 * @property int $SenderControlPort
 * @property string $SenderIpAddress
 * @property int $SmoothingLatency
 * @property string $SourceListenerAddress
 * @property int $SourceListenerPort
 * @property string $StreamId
 */
class Transport extends Shape
{
    /**
     * @param array{
     *     CidrAllowList?: list<string>,
     *     MaxBitrate?: int,
     *     MaxLatency?: int,
     *     MaxSyncBuffer?: int,
     *     MinLatency?: int,
     *     Protocol: 'zixi-push'|'rtp-fec'|'rtp'|'zixi-pull'|'rist'|'st2110-jpegxs'|'cdi'|'srt-listener'|'srt-caller'|'fujitsu-qos'|'udp',
     *     RemoteId?: string,
     *     SenderControlPort?: int,
     *     SenderIpAddress?: string,
     *     SmoothingLatency?: int,
     *     SourceListenerAddress?: string,
     *     SourceListenerPort?: int,
     *     StreamId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
