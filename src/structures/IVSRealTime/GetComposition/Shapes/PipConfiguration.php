<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $featuredParticipantAttribute
 * @property bool|null $omitStoppedVideo
 * @property 'FILL'|'COVER'|'CONTAIN'|null $videoFillMode
 * @property int<0, max>|null $gridGap
 * @property string|null $pipParticipantAttribute
 * @property 'STATIC'|'DYNAMIC'|null $pipBehavior
 * @property int<0, max>|null $pipOffset
 * @property 'TOP_LEFT'|'TOP_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_RIGHT'|null $pipPosition
 * @property int<1, max>|null $pipWidth
 * @property int<1, max>|null $pipHeight
 */
class PipConfiguration extends Shape
{
    /**
     * @param array{
     *     featuredParticipantAttribute?: string|null,
     *     omitStoppedVideo?: bool|null,
     *     videoFillMode?: 'FILL'|'COVER'|'CONTAIN'|null,
     *     gridGap?: int<0, max>|null,
     *     pipParticipantAttribute?: string|null,
     *     pipBehavior?: 'STATIC'|'DYNAMIC'|null,
     *     pipOffset?: int<0, max>|null,
     *     pipPosition?: 'TOP_LEFT'|'TOP_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_RIGHT'|null,
     *     pipWidth?: int<1, max>|null,
     *     pipHeight?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
