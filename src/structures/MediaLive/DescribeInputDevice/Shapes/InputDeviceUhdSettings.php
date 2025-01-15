<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HDMI'|'SDI'|null $ActiveInput
 * @property 'AUTO'|'HDMI'|'SDI'|null $ConfiguredInput
 * @property 'IDLE'|'STREAMING'|null $DeviceState
 * @property double|null $Framerate
 * @property int|null $Height
 * @property int|null $MaxBitrate
 * @property 'INTERLACED'|'PROGRESSIVE'|null $ScanType
 * @property int|null $Width
 * @property int|null $LatencyMs
 * @property 'HEVC'|'AVC'|null $Codec
 * @property InputDeviceMediaConnectSettings|null $MediaconnectSettings
 * @property list<InputDeviceUhdAudioChannelPairConfig>|null $AudioChannelPairs
 */
class InputDeviceUhdSettings extends Shape
{
    /**
     * @param array{
     *     ActiveInput?: 'HDMI'|'SDI'|null,
     *     ConfiguredInput?: 'AUTO'|'HDMI'|'SDI'|null,
     *     DeviceState?: 'IDLE'|'STREAMING'|null,
     *     Framerate?: double|null,
     *     Height?: int|null,
     *     MaxBitrate?: int|null,
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE'|null,
     *     Width?: int|null,
     *     LatencyMs?: int|null,
     *     Codec?: 'HEVC'|'AVC'|null,
     *     MediaconnectSettings?: InputDeviceMediaConnectSettings|null,
     *     AudioChannelPairs?: list<InputDeviceUhdAudioChannelPairConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
