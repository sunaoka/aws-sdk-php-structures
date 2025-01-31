<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $ChannelName
 * @property 'RUNNING'|'STOPPED'|null $ChannelState
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\SlateSource|null $FillerSlate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property list<Shapes\ResponseOutputItem>|null $Outputs
 * @property string|null $PlaybackMode
 * @property array<string, string>|null $Tags
 * @property string|null $Tier
 * @property Shapes\TimeShiftConfiguration|null $TimeShiftConfiguration
 * @property list<string>|null $Audiences
 */
class CreateChannelResponse extends Response
{
}
