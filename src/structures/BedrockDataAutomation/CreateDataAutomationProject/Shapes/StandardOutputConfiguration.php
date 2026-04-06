<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentStandardOutputConfiguration|null $document
 * @property ImageStandardOutputConfiguration|null $image
 * @property VideoStandardOutputConfiguration|null $video
 * @property AudioStandardOutputConfiguration|null $audio
 */
class StandardOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     document?: DocumentStandardOutputConfiguration|null,
     *     image?: ImageStandardOutputConfiguration|null,
     *     video?: VideoStandardOutputConfiguration|null,
     *     audio?: AudioStandardOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
