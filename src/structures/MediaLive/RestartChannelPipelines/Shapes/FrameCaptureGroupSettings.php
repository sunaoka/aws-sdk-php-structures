<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property FrameCaptureCdnSettings|null $FrameCaptureCdnSettings
 */
class FrameCaptureGroupSettings extends Shape
{
    /**
     * @param array{
     *     Destination: OutputLocationRef,
     *     FrameCaptureCdnSettings?: FrameCaptureCdnSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
