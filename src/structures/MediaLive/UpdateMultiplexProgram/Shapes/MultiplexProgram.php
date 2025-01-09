<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelId
 * @property MultiplexProgramSettings $MultiplexProgramSettings
 * @property MultiplexProgramPacketIdentifiersMap $PacketIdentifiersMap
 * @property list<MultiplexProgramPipelineDetail> $PipelineDetails
 * @property string $ProgramName
 */
class MultiplexProgram extends Shape
{
    /**
     * @param array{
     *     ChannelId?: string,
     *     MultiplexProgramSettings?: MultiplexProgramSettings,
     *     PacketIdentifiersMap?: MultiplexProgramPacketIdentifiersMap,
     *     PipelineDetails?: list<MultiplexProgramPipelineDetail>,
     *     ProgramName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
