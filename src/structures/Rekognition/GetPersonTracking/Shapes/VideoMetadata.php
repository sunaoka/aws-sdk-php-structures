<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Codec
 * @property int<0, max>|null $DurationMillis
 * @property string|null $Format
 * @property float|null $FrameRate
 * @property int<0, max>|null $FrameHeight
 * @property int<0, max>|null $FrameWidth
 * @property 'FULL'|'LIMITED'|null $ColorRange
 */
class VideoMetadata extends Shape
{
    /**
     * @param array{
     *     Codec?: string|null,
     *     DurationMillis?: int<0, max>|null,
     *     Format?: string|null,
     *     FrameRate?: float|null,
     *     FrameHeight?: int<0, max>|null,
     *     FrameWidth?: int<0, max>|null,
     *     ColorRange?: 'FULL'|'LIMITED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
