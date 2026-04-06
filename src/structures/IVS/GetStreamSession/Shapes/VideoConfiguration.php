<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $avcLevel
 * @property string|null $avcProfile
 * @property string|null $codec
 * @property string|null $encoder
 * @property string|null $level
 * @property string|null $profile
 * @property int|null $targetBitrate
 * @property int|null $targetFramerate
 * @property string|null $track
 * @property int|null $videoHeight
 * @property int|null $videoWidth
 */
class VideoConfiguration extends Shape
{
    /**
     * @param array{
     *     avcLevel?: string|null,
     *     avcProfile?: string|null,
     *     codec?: string|null,
     *     encoder?: string|null,
     *     level?: string|null,
     *     profile?: string|null,
     *     targetBitrate?: int|null,
     *     targetFramerate?: int|null,
     *     track?: string|null,
     *     videoHeight?: int|null,
     *     videoWidth?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
