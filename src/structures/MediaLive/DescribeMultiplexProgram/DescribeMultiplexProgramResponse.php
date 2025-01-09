<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeMultiplexProgram;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelId
 * @property Shapes\MultiplexProgramSettings $MultiplexProgramSettings
 * @property Shapes\MultiplexProgramPacketIdentifiersMap $PacketIdentifiersMap
 * @property list<Shapes\MultiplexProgramPipelineDetail> $PipelineDetails
 * @property string $ProgramName
 */
class DescribeMultiplexProgramResponse extends Response
{
}
