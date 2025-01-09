<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AdBreak> $AdBreaks
 * @property list<Shapes\AudienceMedia> $AudienceMedia
 * @property string $ChannelName
 * @property string $ProgramName
 * @property Shapes\UpdateProgramScheduleConfiguration $ScheduleConfiguration
 */
class UpdateProgramRequest extends Request
{
    /**
     * @param array{
     *     AdBreaks?: list<Shapes\AdBreak>,
     *     AudienceMedia?: list<Shapes\AudienceMedia>,
     *     ChannelName: string,
     *     ProgramName: string,
     *     ScheduleConfiguration: Shapes\UpdateProgramScheduleConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
