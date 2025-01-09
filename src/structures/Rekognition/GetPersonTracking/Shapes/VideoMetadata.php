<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Codec
 * @property int<0, max> $DurationMillis
 * @property string $Format
 * @property float $FrameRate
 * @property int<0, max> $FrameHeight
 * @property int<0, max> $FrameWidth
 * @property 'FULL'|'LIMITED' $ColorRange
 */
class VideoMetadata extends Shape
{
    /**
     * @param array{
     *     Codec?: string,
     *     DurationMillis?: int<0, max>,
     *     Format?: string,
     *     FrameRate?: float,
     *     FrameHeight?: int<0, max>,
     *     FrameWidth?: int<0, max>,
     *     ColorRange?: 'FULL'|'LIMITED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
