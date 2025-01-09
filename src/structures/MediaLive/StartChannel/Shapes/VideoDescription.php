<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoCodecSettings $CodecSettings
 * @property int $Height
 * @property string $Name
 * @property 'NONE'|'PASSTHROUGH'|'RESPOND' $RespondToAfd
 * @property 'DEFAULT'|'STRETCH_TO_OUTPUT' $ScalingBehavior
 * @property int<0, 100> $Sharpness
 * @property int $Width
 */
class VideoDescription extends Shape
{
    /**
     * @param array{
     *     CodecSettings?: VideoCodecSettings,
     *     Height?: int,
     *     Name: string,
     *     RespondToAfd?: 'NONE'|'PASSTHROUGH'|'RESPOND',
     *     ScalingBehavior?: 'DEFAULT'|'STRETCH_TO_OUTPUT',
     *     Sharpness?: int<0, 100>,
     *     Width?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
