<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AdBreak> $AdBreaks
 * @property string $Arn
 * @property list<Shapes\AudienceMedia> $AudienceMedia
 * @property string $ChannelName
 * @property Shapes\ClipRange $ClipRange
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $DurationMillis
 * @property string $LiveSourceName
 * @property string $ProgramName
 * @property \Aws\Api\DateTimeResult $ScheduledStartTime
 * @property string $SourceLocationName
 * @property string $VodSourceName
 */
class UpdateProgramResponse extends Response
{
}
