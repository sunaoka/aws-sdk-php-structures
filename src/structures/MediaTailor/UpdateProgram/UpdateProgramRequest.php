<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AdBreak>|null $AdBreaks
 * @property string $ChannelName
 * @property string $ProgramName
 * @property Shapes\UpdateProgramScheduleConfiguration $ScheduleConfiguration
 * @property list<Shapes\AudienceMedia>|null $AudienceMedia
 */
class UpdateProgramRequest extends Request
{
    /**
     * @param array{
     *     AdBreaks?: list<Shapes\AdBreak>|null,
     *     ChannelName: string,
     *     ProgramName: string,
     *     ScheduleConfiguration: Shapes\UpdateProgramScheduleConfiguration,
     *     AudienceMedia?: list<Shapes\AudienceMedia>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
