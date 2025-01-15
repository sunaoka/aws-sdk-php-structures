<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsId3SegmentTaggingScheduleActionSettings|null $HlsId3SegmentTaggingSettings
 * @property HlsTimedMetadataScheduleActionSettings|null $HlsTimedMetadataSettings
 * @property InputPrepareScheduleActionSettings|null $InputPrepareSettings
 * @property InputSwitchScheduleActionSettings|null $InputSwitchSettings
 * @property MotionGraphicsActivateScheduleActionSettings|null $MotionGraphicsImageActivateSettings
 * @property MotionGraphicsDeactivateScheduleActionSettings|null $MotionGraphicsImageDeactivateSettings
 * @property PauseStateScheduleActionSettings|null $PauseStateSettings
 * @property Scte35InputScheduleActionSettings|null $Scte35InputSettings
 * @property Scte35ReturnToNetworkScheduleActionSettings|null $Scte35ReturnToNetworkSettings
 * @property Scte35SpliceInsertScheduleActionSettings|null $Scte35SpliceInsertSettings
 * @property Scte35TimeSignalScheduleActionSettings|null $Scte35TimeSignalSettings
 * @property StaticImageActivateScheduleActionSettings|null $StaticImageActivateSettings
 * @property StaticImageDeactivateScheduleActionSettings|null $StaticImageDeactivateSettings
 * @property StaticImageOutputActivateScheduleActionSettings|null $StaticImageOutputActivateSettings
 * @property StaticImageOutputDeactivateScheduleActionSettings|null $StaticImageOutputDeactivateSettings
 */
class ScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     HlsId3SegmentTaggingSettings?: HlsId3SegmentTaggingScheduleActionSettings|null,
     *     HlsTimedMetadataSettings?: HlsTimedMetadataScheduleActionSettings|null,
     *     InputPrepareSettings?: InputPrepareScheduleActionSettings|null,
     *     InputSwitchSettings?: InputSwitchScheduleActionSettings|null,
     *     MotionGraphicsImageActivateSettings?: MotionGraphicsActivateScheduleActionSettings|null,
     *     MotionGraphicsImageDeactivateSettings?: MotionGraphicsDeactivateScheduleActionSettings|null,
     *     PauseStateSettings?: PauseStateScheduleActionSettings|null,
     *     Scte35InputSettings?: Scte35InputScheduleActionSettings|null,
     *     Scte35ReturnToNetworkSettings?: Scte35ReturnToNetworkScheduleActionSettings|null,
     *     Scte35SpliceInsertSettings?: Scte35SpliceInsertScheduleActionSettings|null,
     *     Scte35TimeSignalSettings?: Scte35TimeSignalScheduleActionSettings|null,
     *     StaticImageActivateSettings?: StaticImageActivateScheduleActionSettings|null,
     *     StaticImageDeactivateSettings?: StaticImageDeactivateScheduleActionSettings|null,
     *     StaticImageOutputActivateSettings?: StaticImageOutputActivateScheduleActionSettings|null,
     *     StaticImageOutputDeactivateSettings?: StaticImageOutputDeactivateScheduleActionSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
