<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetChannelSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ApproximateDurationSeconds
 * @property \Aws\Api\DateTimeResult $ApproximateStartTime
 * @property string $Arn
 * @property list<string> $Audiences
 * @property string $ChannelName
 * @property string $LiveSourceName
 * @property string $ProgramName
 * @property list<ScheduleAdBreak> $ScheduleAdBreaks
 * @property 'PROGRAM'|'FILLER_SLATE'|'ALTERNATE_MEDIA' $ScheduleEntryType
 * @property string $SourceLocationName
 * @property string $VodSourceName
 */
class ScheduleEntry extends Shape
{
    /**
     * @param array{
     *     ApproximateDurationSeconds?: int,
     *     ApproximateStartTime?: \Aws\Api\DateTimeResult,
     *     Arn: string,
     *     Audiences?: list<string>,
     *     ChannelName: string,
     *     LiveSourceName?: string,
     *     ProgramName: string,
     *     ScheduleAdBreaks?: list<ScheduleAdBreak>,
     *     ScheduleEntryType?: 'PROGRAM'|'FILLER_SLATE'|'ALTERNATE_MEDIA',
     *     SourceLocationName: string,
     *     VodSourceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
