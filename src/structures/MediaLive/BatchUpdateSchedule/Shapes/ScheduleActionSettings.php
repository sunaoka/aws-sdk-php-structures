<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsId3SegmentTaggingScheduleActionSettings $HlsId3SegmentTaggingSettings
 * @property HlsTimedMetadataScheduleActionSettings $HlsTimedMetadataSettings
 * @property InputPrepareScheduleActionSettings $InputPrepareSettings
 * @property InputSwitchScheduleActionSettings $InputSwitchSettings
 * @property MotionGraphicsActivateScheduleActionSettings $MotionGraphicsImageActivateSettings
 * @property MotionGraphicsDeactivateScheduleActionSettings $MotionGraphicsImageDeactivateSettings
 * @property PauseStateScheduleActionSettings $PauseStateSettings
 * @property Scte35InputScheduleActionSettings $Scte35InputSettings
 * @property Scte35ReturnToNetworkScheduleActionSettings $Scte35ReturnToNetworkSettings
 * @property Scte35SpliceInsertScheduleActionSettings $Scte35SpliceInsertSettings
 * @property Scte35TimeSignalScheduleActionSettings $Scte35TimeSignalSettings
 * @property StaticImageActivateScheduleActionSettings $StaticImageActivateSettings
 * @property StaticImageDeactivateScheduleActionSettings $StaticImageDeactivateSettings
 * @property StaticImageOutputActivateScheduleActionSettings $StaticImageOutputActivateSettings
 * @property StaticImageOutputDeactivateScheduleActionSettings $StaticImageOutputDeactivateSettings
 */
class ScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     HlsId3SegmentTaggingSettings?: HlsId3SegmentTaggingScheduleActionSettings,
     *     HlsTimedMetadataSettings?: HlsTimedMetadataScheduleActionSettings,
     *     InputPrepareSettings?: InputPrepareScheduleActionSettings,
     *     InputSwitchSettings?: InputSwitchScheduleActionSettings,
     *     MotionGraphicsImageActivateSettings?: MotionGraphicsActivateScheduleActionSettings,
     *     MotionGraphicsImageDeactivateSettings?: MotionGraphicsDeactivateScheduleActionSettings,
     *     PauseStateSettings?: PauseStateScheduleActionSettings,
     *     Scte35InputSettings?: Scte35InputScheduleActionSettings,
     *     Scte35ReturnToNetworkSettings?: Scte35ReturnToNetworkScheduleActionSettings,
     *     Scte35SpliceInsertSettings?: Scte35SpliceInsertScheduleActionSettings,
     *     Scte35TimeSignalSettings?: Scte35TimeSignalScheduleActionSettings,
     *     StaticImageActivateSettings?: StaticImageActivateScheduleActionSettings,
     *     StaticImageDeactivateSettings?: StaticImageDeactivateScheduleActionSettings,
     *     StaticImageOutputActivateSettings?: StaticImageOutputActivateScheduleActionSettings,
     *     StaticImageOutputDeactivateSettings?: StaticImageOutputDeactivateScheduleActionSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
