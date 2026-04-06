<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $state
 * @property list<'VIDEO_SUMMARY'|'IAB'|'CHAPTER_SUMMARY'>|null $types
 */
class VideoStandardGenerativeField extends Shape
{
    /**
     * @param array{
     *     state: 'ENABLED'|'DISABLED',
     *     types?: list<'VIDEO_SUMMARY'|'IAB'|'CHAPTER_SUMMARY'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
