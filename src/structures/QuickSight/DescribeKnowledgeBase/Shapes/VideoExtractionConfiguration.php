<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $videoExtractionStatus
 * @property 'AUDIO_TRANSCRIPTION_ONLY'|'VISUAL_CONTENT_AND_AUDIO_TRANSCRIPTION'|null $videoExtractionType
 */
class VideoExtractionConfiguration extends Shape
{
    /**
     * @param array{
     *     videoExtractionStatus: 'ENABLED'|'DISABLED',
     *     videoExtractionType?: 'AUDIO_TRANSCRIPTION_ONLY'|'VISUAL_CONTENT_AND_AUDIO_TRANSCRIPTION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
