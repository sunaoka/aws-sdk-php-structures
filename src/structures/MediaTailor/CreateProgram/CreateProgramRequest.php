<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AdBreak> $AdBreaks
 * @property list<Shapes\AudienceMedia> $AudienceMedia
 * @property string $ChannelName
 * @property string $LiveSourceName
 * @property string $ProgramName
 * @property Shapes\ScheduleConfiguration $ScheduleConfiguration
 * @property string $SourceLocationName
 * @property string $VodSourceName
 */
class CreateProgramRequest extends Request
{
    /**
     * @param array{
     *     AdBreaks?: list<Shapes\AdBreak>,
     *     AudienceMedia?: list<Shapes\AudienceMedia>,
     *     ChannelName: string,
     *     LiveSourceName?: string,
     *     ProgramName: string,
     *     ScheduleConfiguration: Shapes\ScheduleConfiguration,
     *     SourceLocationName: string,
     *     VodSourceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
