<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AdBreak>|null $AdBreaks
 * @property string|null $Arn
 * @property string|null $ChannelName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $ProgramName
 * @property string|null $SourceLocationName
 * @property string|null $VodSourceName
 * @property string|null $LiveSourceName
 * @property Shapes\ClipRange|null $ClipRange
 * @property int|null $DurationMillis
 * @property \Aws\Api\DateTimeResult|null $ScheduledStartTime
 * @property list<Shapes\AudienceMedia>|null $AudienceMedia
 */
class UpdateProgramResponse extends Response
{
}
