<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Codec
 * @property int $DurationMillis
 * @property string $Format
 * @property float $FrameRate
 * @property int $FrameHeight
 * @property int $FrameWidth
 * @property 'FULL'|'LIMITED' $ColorRange
 */
class VideoMetadata extends Shape
{
    /**
     * @param array{
     *     Codec?: string,
     *     DurationMillis?: int,
     *     Format?: string,
     *     FrameRate?: float,
     *     FrameHeight?: int,
     *     FrameWidth?: int,
     *     ColorRange?: 'FULL'|'LIMITED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
