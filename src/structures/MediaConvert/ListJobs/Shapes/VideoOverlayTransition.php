<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoOverlayPosition|null $EndPosition
 * @property string|null $EndTimecode
 * @property string|null $StartTimecode
 */
class VideoOverlayTransition extends Shape
{
    /**
     * @param array{
     *     EndPosition?: VideoOverlayPosition|null,
     *     EndTimecode?: string|null,
     *     StartTimecode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
