<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AdBreak>|null $AdBreaks
 * @property string|null $Arn
 * @property list<Shapes\AudienceMedia>|null $AudienceMedia
 * @property string|null $ChannelName
 * @property Shapes\ClipRange|null $ClipRange
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property int|null $DurationMillis
 * @property string|null $LiveSourceName
 * @property string|null $ProgramName
 * @property \Aws\Api\DateTimeResult|null $ScheduledStartTime
 * @property string|null $SourceLocationName
 * @property string|null $VodSourceName
 */
class CreateProgramResponse extends Response
{
}
