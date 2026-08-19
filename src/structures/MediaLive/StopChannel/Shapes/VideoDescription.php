<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoCodecSettings|null $CodecSettings
 * @property int|null $Height
 * @property string $Name
 * @property 'NONE'|'PASSTHROUGH'|'RESPOND'|null $RespondToAfd
 * @property 'DEFAULT'|'STRETCH_TO_OUTPUT'|'SMART_CROP'|null $ScalingBehavior
 * @property int|null $Sharpness
 * @property int|null $Width
 * @property VideoPositionRectangle|null $CropRectangle
 * @property VideoPositionRectangle|null $OutputPositionRectangle
 */
class VideoDescription extends Shape
{
    /**
     * @param array{
     *     CodecSettings?: VideoCodecSettings|null,
     *     Height?: int|null,
     *     Name: string,
     *     RespondToAfd?: 'NONE'|'PASSTHROUGH'|'RESPOND'|null,
     *     ScalingBehavior?: 'DEFAULT'|'STRETCH_TO_OUTPUT'|'SMART_CROP'|null,
     *     Sharpness?: int|null,
     *     Width?: int|null,
     *     CropRectangle?: VideoPositionRectangle|null,
     *     OutputPositionRectangle?: VideoPositionRectangle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
