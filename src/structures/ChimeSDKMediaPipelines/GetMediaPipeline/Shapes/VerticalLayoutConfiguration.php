<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JoinSequence'|'SpeakerSequence'|null $TileOrder
 * @property 'Left'|'Right'|null $TilePosition
 * @property int<1, 10>|null $TileCount
 * @property string|null $TileAspectRatio
 */
class VerticalLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     TileOrder?: 'JoinSequence'|'SpeakerSequence'|null,
     *     TilePosition?: 'Left'|'Right'|null,
     *     TileCount?: int<1, 10>|null,
     *     TileAspectRatio?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
