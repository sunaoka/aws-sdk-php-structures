<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioHlsRenditionSelection $AudioHlsRenditionSelection
 * @property AudioLanguageSelection $AudioLanguageSelection
 * @property AudioPidSelection $AudioPidSelection
 * @property AudioTrackSelection $AudioTrackSelection
 */
class AudioSelectorSettings extends Shape
{
    /**
     * @param array{
     *     AudioHlsRenditionSelection?: AudioHlsRenditionSelection,
     *     AudioLanguageSelection?: AudioLanguageSelection,
     *     AudioPidSelection?: AudioPidSelection,
     *     AudioTrackSelection?: AudioTrackSelection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
