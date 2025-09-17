<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $featuredParticipantAttribute
 * @property bool|null $omitStoppedVideo
 * @property 'AUTO'|'VIDEO'|'SQUARE'|'PORTRAIT'|null $videoAspectRatio
 * @property 'FILL'|'COVER'|'CONTAIN'|null $videoFillMode
 * @property int<0, max>|null $gridGap
 * @property string|null $participantOrderAttribute
 */
class GridConfiguration extends Shape
{
    /**
     * @param array{
     *     featuredParticipantAttribute?: string|null,
     *     omitStoppedVideo?: bool|null,
     *     videoAspectRatio?: 'AUTO'|'VIDEO'|'SQUARE'|'PORTRAIT'|null,
     *     videoFillMode?: 'FILL'|'COVER'|'CONTAIN'|null,
     *     gridGap?: int<0, max>|null,
     *     participantOrderAttribute?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
