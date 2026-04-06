<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AdBreak>|null $AdBreaks
 * @property list<Shapes\AudienceMedia>|null $AudienceMedia
 * @property string $ChannelName
 * @property string|null $LiveSourceName
 * @property string $ProgramName
 * @property Shapes\ScheduleConfiguration $ScheduleConfiguration
 * @property string $SourceLocationName
 * @property string|null $VodSourceName
 */
class CreateProgramRequest extends Request
{
    /**
     * @param array{
     *     AdBreaks?: list<Shapes\AdBreak>|null,
     *     AudienceMedia?: list<Shapes\AudienceMedia>|null,
     *     ChannelName: string,
     *     LiveSourceName?: string|null,
     *     ProgramName: string,
     *     ScheduleConfiguration: Shapes\ScheduleConfiguration,
     *     SourceLocationName: string,
     *     VodSourceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
