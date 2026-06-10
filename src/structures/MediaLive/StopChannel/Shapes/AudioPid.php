<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioDolbyEDecode|null $DolbyEDecode
 * @property int $Pid
 * @property AudioPreMixerSettings|null $PremixSettings
 */
class AudioPid extends Shape
{
    /**
     * @param array{
     *     DolbyEDecode?: AudioDolbyEDecode|null,
     *     Pid: int,
     *     PremixSettings?: AudioPreMixerSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
