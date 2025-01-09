<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexPrograms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelId
 * @property string $ProgramName
 */
class MultiplexProgramSummary extends Shape
{
    /**
     * @param array{
     *     ChannelId?: string,
     *     ProgramName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
