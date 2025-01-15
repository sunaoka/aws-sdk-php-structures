<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexPrograms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelId
 * @property string|null $ProgramName
 */
class MultiplexProgramSummary extends Shape
{
    /**
     * @param array{
     *     ChannelId?: string|null,
     *     ProgramName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
