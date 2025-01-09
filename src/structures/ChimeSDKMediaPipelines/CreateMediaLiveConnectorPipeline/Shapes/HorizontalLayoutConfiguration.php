<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JoinSequence'|'SpeakerSequence' $TileOrder
 * @property 'Top'|'Bottom' $TilePosition
 * @property int<1, 10> $TileCount
 * @property string $TileAspectRatio
 */
class HorizontalLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     TileOrder?: 'JoinSequence'|'SpeakerSequence',
     *     TilePosition?: 'Top'|'Bottom',
     *     TileCount?: int<1, 10>,
     *     TileAspectRatio?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
