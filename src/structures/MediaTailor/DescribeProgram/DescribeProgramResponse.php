<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeProgram;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AdBreak>|null $AdBreaks
 * @property string|null $Arn
 * @property string|null $ChannelName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $LiveSourceName
 * @property string|null $ProgramName
 * @property \Aws\Api\DateTimeResult|null $ScheduledStartTime
 * @property string|null $SourceLocationName
 * @property string|null $VodSourceName
 * @property Shapes\ClipRange|null $ClipRange
 * @property int|null $DurationMillis
 * @property list<Shapes\AudienceMedia>|null $AudienceMedia
 */
class DescribeProgramResponse extends Response
{
}
