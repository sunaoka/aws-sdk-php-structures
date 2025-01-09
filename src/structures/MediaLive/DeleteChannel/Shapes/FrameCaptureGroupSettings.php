<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property FrameCaptureCdnSettings $FrameCaptureCdnSettings
 */
class FrameCaptureGroupSettings extends Shape
{
    /**
     * @param array{
     *     Destination: OutputLocationRef,
     *     FrameCaptureCdnSettings?: FrameCaptureCdnSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
