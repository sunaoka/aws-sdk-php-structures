<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $state
 * @property list<'CONTENT_MODERATION'|'TEXT_DETECTION'|'TRANSCRIPT'|'LOGOS'>|null $types
 */
class VideoExtractionCategory extends Shape
{
    /**
     * @param array{
     *     state: 'ENABLED'|'DISABLED',
     *     types?: list<'CONTENT_MODERATION'|'TEXT_DETECTION'|'TRANSCRIPT'|'LOGOS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
