<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_VIDEO_DELAY'|'VIDEO_ALIGNED_CAPTIONS'|null $CaptionSynchronizationMode
 * @property string|null $InferenceFeedOutput
 */
class SmartSubtitleSourceSettings extends Shape
{
    /**
     * @param array{
     *     CaptionSynchronizationMode?: 'NO_VIDEO_DELAY'|'VIDEO_ALIGNED_CAPTIONS'|null,
     *     InferenceFeedOutput?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
