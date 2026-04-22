<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $avcProfile
 * @property string|null $avcLevel
 * @property string|null $codec
 * @property string|null $encoder
 * @property int|null $targetBitrate
 * @property int|null $targetFramerate
 * @property int|null $videoHeight
 * @property int|null $videoWidth
 * @property string|null $level
 * @property string|null $track
 * @property string|null $profile
 */
class VideoConfiguration extends Shape
{
    /**
     * @param array{
     *     avcProfile?: string|null,
     *     avcLevel?: string|null,
     *     codec?: string|null,
     *     encoder?: string|null,
     *     targetBitrate?: int|null,
     *     targetFramerate?: int|null,
     *     videoHeight?: int|null,
     *     videoWidth?: int|null,
     *     level?: string|null,
     *     track?: string|null,
     *     profile?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
