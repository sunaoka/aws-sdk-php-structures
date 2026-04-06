<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $state
 * @property list<'VIDEO_SUMMARY'|'SCENE_SUMMARY'|'IAB'>|null $types
 */
class VideoStandardGenerativeField extends Shape
{
    /**
     * @param array{
     *     state: 'ENABLED'|'DISABLED',
     *     types?: list<'VIDEO_SUMMARY'|'SCENE_SUMMARY'|'IAB'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
