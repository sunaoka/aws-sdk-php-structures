<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplexProgram;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChannelId
 * @property Shapes\MultiplexProgramSettings|null $MultiplexProgramSettings
 * @property Shapes\MultiplexProgramPacketIdentifiersMap|null $PacketIdentifiersMap
 * @property list<Shapes\MultiplexProgramPipelineDetail>|null $PipelineDetails
 * @property string|null $ProgramName
 */
class DeleteMultiplexProgramResponse extends Response
{
}
