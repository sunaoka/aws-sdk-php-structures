<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MultiplexId
 * @property string $ProgramName
 */
class MultiplexProgramChannelDestinationSettings extends Shape
{
    /**
     * @param array{
     *     MultiplexId?: string,
     *     ProgramName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
