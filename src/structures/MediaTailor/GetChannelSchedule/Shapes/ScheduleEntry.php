<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetChannelSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ApproximateDurationSeconds
 * @property \Aws\Api\DateTimeResult|null $ApproximateStartTime
 * @property string $Arn
 * @property list<string>|null $Audiences
 * @property string $ChannelName
 * @property string|null $LiveSourceName
 * @property string $ProgramName
 * @property list<ScheduleAdBreak>|null $ScheduleAdBreaks
 * @property 'PROGRAM'|'FILLER_SLATE'|'ALTERNATE_MEDIA'|null $ScheduleEntryType
 * @property string $SourceLocationName
 * @property string|null $VodSourceName
 */
class ScheduleEntry extends Shape
{
    /**
     * @param array{
     *     ApproximateDurationSeconds?: int|null,
     *     ApproximateStartTime?: \Aws\Api\DateTimeResult|null,
     *     Arn: string,
     *     Audiences?: list<string>|null,
     *     ChannelName: string,
     *     LiveSourceName?: string|null,
     *     ProgramName: string,
     *     ScheduleAdBreaks?: list<ScheduleAdBreak>|null,
     *     ScheduleEntryType?: 'PROGRAM'|'FILLER_SLATE'|'ALTERNATE_MEDIA'|null,
     *     SourceLocationName: string,
     *     VodSourceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
