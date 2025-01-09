<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $featuredParticipantAttribute
 * @property bool $omitStoppedVideo
 * @property 'FILL'|'COVER'|'CONTAIN' $videoFillMode
 * @property int<0, max> $gridGap
 * @property string $pipParticipantAttribute
 * @property 'STATIC'|'DYNAMIC' $pipBehavior
 * @property int<0, max> $pipOffset
 * @property 'TOP_LEFT'|'TOP_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_RIGHT' $pipPosition
 * @property int<1, max> $pipWidth
 * @property int<1, max> $pipHeight
 */
class PipConfiguration extends Shape
{
    /**
     * @param array{
     *     featuredParticipantAttribute?: string,
     *     omitStoppedVideo?: bool,
     *     videoFillMode?: 'FILL'|'COVER'|'CONTAIN',
     *     gridGap?: int<0, max>,
     *     pipParticipantAttribute?: string,
     *     pipBehavior?: 'STATIC'|'DYNAMIC',
     *     pipOffset?: int<0, max>,
     *     pipPosition?: 'TOP_LEFT'|'TOP_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_RIGHT',
     *     pipWidth?: int<1, max>,
     *     pipHeight?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
