<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $state
 * @property list<'AUDIO_CONTENT_MODERATION'|'CHAPTER_CONTENT_MODERATION'|'TRANSCRIPT'> $types
 */
class AudioExtractionCategory extends Shape
{
    /**
     * @param array{
     *     state: 'ENABLED'|'DISABLED',
     *     types?: list<'AUDIO_CONTENT_MODERATION'|'CHAPTER_CONTENT_MODERATION'|'TRANSCRIPT'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
