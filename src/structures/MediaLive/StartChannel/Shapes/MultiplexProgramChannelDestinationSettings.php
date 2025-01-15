<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MultiplexId
 * @property string|null $ProgramName
 */
class MultiplexProgramChannelDestinationSettings extends Shape
{
    /**
     * @param array{
     *     MultiplexId?: string|null,
     *     ProgramName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
