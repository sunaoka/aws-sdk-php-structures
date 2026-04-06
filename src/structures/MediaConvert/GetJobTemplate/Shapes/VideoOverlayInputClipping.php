<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndTimecode
 * @property string|null $StartTimecode
 */
class VideoOverlayInputClipping extends Shape
{
    /**
     * @param array{
     *     EndTimecode?: string|null,
     *     StartTimecode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
