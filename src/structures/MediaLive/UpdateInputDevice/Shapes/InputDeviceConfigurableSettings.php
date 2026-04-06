<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HDMI'|'SDI'|null $ConfiguredInput
 * @property int|null $MaxBitrate
 * @property int|null $LatencyMs
 * @property 'HEVC'|'AVC'|null $Codec
 * @property InputDeviceMediaConnectConfigurableSettings|null $MediaconnectSettings
 * @property list<InputDeviceConfigurableAudioChannelPairConfig>|null $AudioChannelPairs
 */
class InputDeviceConfigurableSettings extends Shape
{
    /**
     * @param array{
     *     ConfiguredInput?: 'AUTO'|'HDMI'|'SDI'|null,
     *     MaxBitrate?: int|null,
     *     LatencyMs?: int|null,
     *     Codec?: 'HEVC'|'AVC'|null,
     *     MediaconnectSettings?: InputDeviceMediaConnectConfigurableSettings|null,
     *     AudioChannelPairs?: list<InputDeviceConfigurableAudioChannelPairConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
