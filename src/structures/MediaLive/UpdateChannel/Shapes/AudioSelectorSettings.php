<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioHlsRenditionSelection|null $AudioHlsRenditionSelection
 * @property AudioLanguageSelection|null $AudioLanguageSelection
 * @property AudioPidSelection|null $AudioPidSelection
 * @property AudioTrackSelection|null $AudioTrackSelection
 */
class AudioSelectorSettings extends Shape
{
    /**
     * @param array{
     *     AudioHlsRenditionSelection?: AudioHlsRenditionSelection|null,
     *     AudioLanguageSelection?: AudioLanguageSelection|null,
     *     AudioPidSelection?: AudioPidSelection|null,
     *     AudioTrackSelection?: AudioTrackSelection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
