<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $featuredParticipantAttribute
 * @property bool $omitStoppedVideo
 * @property 'AUTO'|'VIDEO'|'SQUARE'|'PORTRAIT' $videoAspectRatio
 * @property 'FILL'|'COVER'|'CONTAIN' $videoFillMode
 * @property int $gridGap
 */
class GridConfiguration extends Shape
{
    /**
     * @param array{
     *     featuredParticipantAttribute?: string,
     *     omitStoppedVideo?: bool,
     *     videoAspectRatio?: 'AUTO'|'VIDEO'|'SQUARE'|'PORTRAIT',
     *     videoFillMode?: 'FILL'|'COVER'|'CONTAIN',
     *     gridGap?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
