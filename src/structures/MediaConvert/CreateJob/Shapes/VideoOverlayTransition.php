<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoOverlayPosition $EndPosition
 * @property string $EndTimecode
 * @property string $StartTimecode
 */
class VideoOverlayTransition extends Shape
{
    /**
     * @param array{
     *     EndPosition?: VideoOverlayPosition,
     *     EndTimecode?: string,
     *     StartTimecode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
