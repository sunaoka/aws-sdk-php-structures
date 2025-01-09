<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<string> $Audiences
 * @property string $ChannelName
 * @property 'RUNNING'|'STOPPED' $ChannelState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\SlateSource $FillerSlate
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\LogConfigurationForChannel $LogConfiguration
 * @property list<Shapes\ResponseOutputItem> $Outputs
 * @property string $PlaybackMode
 * @property array<string, string> $Tags
 * @property string $Tier
 * @property Shapes\TimeShiftConfiguration $TimeShiftConfiguration
 */
class DescribeChannelResponse extends Response
{
}
