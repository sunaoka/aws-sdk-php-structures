<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HDMI'|'SDI' $ActiveInput
 * @property 'AUTO'|'HDMI'|'SDI' $ConfiguredInput
 * @property 'IDLE'|'STREAMING' $DeviceState
 * @property double $Framerate
 * @property int $Height
 * @property int $MaxBitrate
 * @property 'INTERLACED'|'PROGRESSIVE' $ScanType
 * @property int $Width
 * @property int $LatencyMs
 * @property 'HEVC'|'AVC' $Codec
 * @property InputDeviceMediaConnectSettings $MediaconnectSettings
 * @property list<InputDeviceUhdAudioChannelPairConfig> $AudioChannelPairs
 */
class InputDeviceUhdSettings extends Shape
{
    /**
     * @param array{
     *     ActiveInput?: 'HDMI'|'SDI',
     *     ConfiguredInput?: 'AUTO'|'HDMI'|'SDI',
     *     DeviceState?: 'IDLE'|'STREAMING',
     *     Framerate?: double,
     *     Height?: int,
     *     MaxBitrate?: int,
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE',
     *     Width?: int,
     *     LatencyMs?: int,
     *     Codec?: 'HEVC'|'AVC',
     *     MediaconnectSettings?: InputDeviceMediaConnectSettings,
     *     AudioChannelPairs?: list<InputDeviceUhdAudioChannelPairConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
