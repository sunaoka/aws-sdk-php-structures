<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property list<string>|null $Audiences
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
 */
class UpdateChannelResponse extends Response
{
}
