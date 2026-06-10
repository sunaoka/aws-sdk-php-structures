<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Pid
 * @property list<AudioPid>|null $Pids
 */
class AudioPidSelection extends Shape
{
    /**
     * @param array{
     *     Pid: int,
     *     Pids?: list<AudioPid>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
