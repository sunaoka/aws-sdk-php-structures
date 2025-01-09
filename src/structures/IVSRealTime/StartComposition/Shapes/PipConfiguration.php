<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $featuredParticipantAttribute
 * @property bool $omitStoppedVideo
 * @property 'FILL'|'COVER'|'CONTAIN' $videoFillMode
 * @property int $gridGap
 * @property string $pipParticipantAttribute
 * @property 'STATIC'|'DYNAMIC' $pipBehavior
 * @property int $pipOffset
 * @property 'TOP_LEFT'|'TOP_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_RIGHT' $pipPosition
 * @property int $pipWidth
 * @property int $pipHeight
 */
class PipConfiguration extends Shape
{
    /**
     * @param array{
     *     featuredParticipantAttribute?: string,
     *     omitStoppedVideo?: bool,
     *     videoFillMode?: 'FILL'|'COVER'|'CONTAIN',
     *     gridGap?: int,
     *     pipParticipantAttribute?: string,
     *     pipBehavior?: 'STATIC'|'DYNAMIC',
     *     pipOffset?: int,
     *     pipPosition?: 'TOP_LEFT'|'TOP_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_RIGHT',
     *     pipWidth?: int,
     *     pipHeight?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
