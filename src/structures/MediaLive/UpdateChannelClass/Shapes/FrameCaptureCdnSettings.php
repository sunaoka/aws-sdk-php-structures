<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrameCaptureS3Settings|null $FrameCaptureS3Settings
 */
class FrameCaptureCdnSettings extends Shape
{
    /**
     * @param array{FrameCaptureS3Settings?: FrameCaptureS3Settings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
