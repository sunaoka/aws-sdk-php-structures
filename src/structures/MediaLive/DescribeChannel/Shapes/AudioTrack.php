<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Track
 * @property AudioPreMixerSettings|null $PremixSettings
 */
class AudioTrack extends Shape
{
    /**
     * @param array{
     *     Track: int,
     *     PremixSettings?: AudioPreMixerSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
