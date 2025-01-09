<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrameCaptureS3Settings $FrameCaptureS3Settings
 */
class FrameCaptureCdnSettings extends Shape
{
    /**
     * @param array{FrameCaptureS3Settings?: FrameCaptureS3Settings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
