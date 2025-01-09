<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1000, 1000> $AdAvailOffset
 * @property AvailBlanking $AvailBlanking
 * @property list<ColorConversion3DLUTSetting> $ColorConversion3DLUTSettings
 * @property EsamSettings $Esam
 * @property ExtendedDataServices $ExtendedDataServices
 * @property int<1, 150> $FollowSource
 * @property list<Input> $Inputs
 * @property KantarWatermarkSettings $KantarWatermark
 * @property MotionImageInserter $MotionImageInserter
 * @property NielsenConfiguration $NielsenConfiguration
 * @property NielsenNonLinearWatermarkSettings $NielsenNonLinearWatermark
 * @property list<OutputGroup> $OutputGroups
 * @property TimecodeConfig $TimecodeConfig
 * @property TimedMetadataInsertion $TimedMetadataInsertion
 */
class JobSettings extends Shape
{
    /**
     * @param array{
     *     AdAvailOffset?: int<-1000, 1000>,
     *     AvailBlanking?: AvailBlanking,
     *     ColorConversion3DLUTSettings?: list<ColorConversion3DLUTSetting>,
     *     Esam?: EsamSettings,
     *     ExtendedDataServices?: ExtendedDataServices,
     *     FollowSource?: int<1, 150>,
     *     Inputs?: list<Input>,
     *     KantarWatermark?: KantarWatermarkSettings,
     *     MotionImageInserter?: MotionImageInserter,
     *     NielsenConfiguration?: NielsenConfiguration,
     *     NielsenNonLinearWatermark?: NielsenNonLinearWatermarkSettings,
     *     OutputGroups?: list<OutputGroup>,
     *     TimecodeConfig?: TimecodeConfig,
     *     TimedMetadataInsertion?: TimedMetadataInsertion
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
