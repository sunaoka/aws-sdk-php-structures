<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelId
 * @property MultiplexProgramSettings|null $MultiplexProgramSettings
 * @property MultiplexProgramPacketIdentifiersMap|null $PacketIdentifiersMap
 * @property list<MultiplexProgramPipelineDetail>|null $PipelineDetails
 * @property string|null $ProgramName
 */
class MultiplexProgram extends Shape
{
    /**
     * @param array{
     *     ChannelId?: string|null,
     *     MultiplexProgramSettings?: MultiplexProgramSettings|null,
     *     PacketIdentifiersMap?: MultiplexProgramPacketIdentifiersMap|null,
     *     PipelineDetails?: list<MultiplexProgramPipelineDetail>|null,
     *     ProgramName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
