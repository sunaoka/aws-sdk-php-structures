<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndTimecode
 * @property VideoOverlayInput|null $Input
 * @property string|null $StartTimecode
 */
class VideoOverlay extends Shape
{
    /**
     * @param array{
     *     EndTimecode?: string|null,
     *     Input?: VideoOverlayInput|null,
     *     StartTimecode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
