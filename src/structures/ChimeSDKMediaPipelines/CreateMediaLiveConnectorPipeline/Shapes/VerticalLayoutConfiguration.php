<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JoinSequence'|'SpeakerSequence' $TileOrder
 * @property 'Left'|'Right' $TilePosition
 * @property int $TileCount
 * @property string $TileAspectRatio
 */
class VerticalLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     TileOrder?: 'JoinSequence'|'SpeakerSequence',
     *     TilePosition?: 'Left'|'Right',
     *     TileCount?: int,
     *     TileAspectRatio?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
