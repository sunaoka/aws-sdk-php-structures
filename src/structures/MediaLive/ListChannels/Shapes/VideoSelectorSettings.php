<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoSelectorPid $VideoSelectorPid
 * @property VideoSelectorProgramId $VideoSelectorProgramId
 */
class VideoSelectorSettings extends Shape
{
    /**
     * @param array{
     *     VideoSelectorPid?: VideoSelectorPid,
     *     VideoSelectorProgramId?: VideoSelectorProgramId
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
