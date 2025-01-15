<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JoinSequence'|'SpeakerSequence'|null $TileOrder
 * @property 'Top'|'Bottom'|null $TilePosition
 * @property int<1, 10>|null $TileCount
 * @property string|null $TileAspectRatio
 */
class HorizontalLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     TileOrder?: 'JoinSequence'|'SpeakerSequence'|null,
     *     TilePosition?: 'Top'|'Bottom'|null,
     *     TileCount?: int<1, 10>|null,
     *     TileAspectRatio?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
