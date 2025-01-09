<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentStandardOutputConfiguration $document
 * @property ImageStandardOutputConfiguration $image
 * @property VideoStandardOutputConfiguration $video
 * @property AudioStandardOutputConfiguration $audio
 */
class StandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     document?: DocumentStandardOutputConfiguration,
     *     image?: ImageStandardOutputConfiguration,
     *     video?: VideoStandardOutputConfiguration,
     *     audio?: AudioStandardOutputConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
