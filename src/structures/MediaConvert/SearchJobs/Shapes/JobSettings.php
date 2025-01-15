<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1000, 1000>|null $AdAvailOffset
 * @property AvailBlanking|null $AvailBlanking
 * @property list<ColorConversion3DLUTSetting>|null $ColorConversion3DLUTSettings
 * @property EsamSettings|null $Esam
 * @property ExtendedDataServices|null $ExtendedDataServices
 * @property int<1, 150>|null $FollowSource
 * @property list<Input>|null $Inputs
 * @property KantarWatermarkSettings|null $KantarWatermark
 * @property MotionImageInserter|null $MotionImageInserter
 * @property NielsenConfiguration|null $NielsenConfiguration
 * @property NielsenNonLinearWatermarkSettings|null $NielsenNonLinearWatermark
 * @property list<OutputGroup>|null $OutputGroups
 * @property TimecodeConfig|null $TimecodeConfig
 * @property TimedMetadataInsertion|null $TimedMetadataInsertion
 */
class JobSettings extends Shape
{
    /**
     * @param array{
     *     AdAvailOffset?: int<-1000, 1000>|null,
     *     AvailBlanking?: AvailBlanking|null,
     *     ColorConversion3DLUTSettings?: list<ColorConversion3DLUTSetting>|null,
     *     Esam?: EsamSettings|null,
     *     ExtendedDataServices?: ExtendedDataServices|null,
     *     FollowSource?: int<1, 150>|null,
     *     Inputs?: list<Input>|null,
     *     KantarWatermark?: KantarWatermarkSettings|null,
     *     MotionImageInserter?: MotionImageInserter|null,
     *     NielsenConfiguration?: NielsenConfiguration|null,
     *     NielsenNonLinearWatermark?: NielsenNonLinearWatermarkSettings|null,
     *     OutputGroups?: list<OutputGroup>|null,
     *     TimecodeConfig?: TimecodeConfig|null,
     *     TimedMetadataInsertion?: TimedMetadataInsertion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
