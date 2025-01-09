<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HDMI'|'SDI' $ConfiguredInput
 * @property int $MaxBitrate
 * @property int $LatencyMs
 * @property 'HEVC'|'AVC' $Codec
 * @property InputDeviceMediaConnectConfigurableSettings $MediaconnectSettings
 * @property list<InputDeviceConfigurableAudioChannelPairConfig> $AudioChannelPairs
 */
class InputDeviceConfigurableSettings extends Shape
{
    /**
     * @param array{
     *     ConfiguredInput?: 'AUTO'|'HDMI'|'SDI',
     *     MaxBitrate?: int,
     *     LatencyMs?: int,
     *     Codec?: 'HEVC'|'AVC',
     *     MediaconnectSettings?: InputDeviceMediaConnectConfigurableSettings,
     *     AudioChannelPairs?: list<InputDeviceConfigurableAudioChannelPairConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
