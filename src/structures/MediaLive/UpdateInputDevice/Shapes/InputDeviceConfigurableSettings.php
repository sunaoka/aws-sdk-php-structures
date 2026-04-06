<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HDMI'|'SDI'|null $ConfiguredInput
 * @property int|null $MaxBitrate
 * @property int|null $LatencyMs
 */
class InputDeviceConfigurableSettings extends Shape
{
    /**
     * @param array{
     *     ConfiguredInput?: 'AUTO'|'HDMI'|'SDI'|null,
     *     MaxBitrate?: int|null,
     *     LatencyMs?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
