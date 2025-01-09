<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $avcLevel
 * @property string $avcProfile
 * @property string $codec
 * @property string $encoder
 * @property string $level
 * @property string $profile
 * @property int $targetBitrate
 * @property int $targetFramerate
 * @property string $track
 * @property int $videoHeight
 * @property int $videoWidth
 */
class VideoConfiguration extends Shape
{
    /**
     * @param array{
     *     avcLevel?: string,
     *     avcProfile?: string,
     *     codec?: string,
     *     encoder?: string,
     *     level?: string,
     *     profile?: string,
     *     targetBitrate?: int,
     *     targetFramerate?: int,
     *     track?: string,
     *     videoHeight?: int,
     *     videoWidth?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
