<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AdAvailOffset
 * @property AvailBlanking $AvailBlanking
 * @property list<ColorConversion3DLUTSetting> $ColorConversion3DLUTSettings
 * @property EsamSettings $Esam
 * @property ExtendedDataServices $ExtendedDataServices
 * @property int $FollowSource
 * @property list<InputTemplate> $Inputs
 * @property KantarWatermarkSettings $KantarWatermark
 * @property MotionImageInserter $MotionImageInserter
 * @property NielsenConfiguration $NielsenConfiguration
 * @property NielsenNonLinearWatermarkSettings $NielsenNonLinearWatermark
 * @property list<OutputGroup> $OutputGroups
 * @property TimecodeConfig $TimecodeConfig
 * @property TimedMetadataInsertion $TimedMetadataInsertion
 */
class JobTemplateSettings extends Shape
{
    /**
     * @param array{
     *     AdAvailOffset?: int,
     *     AvailBlanking?: AvailBlanking,
     *     ColorConversion3DLUTSettings?: list<ColorConversion3DLUTSetting>,
     *     Esam?: EsamSettings,
     *     ExtendedDataServices?: ExtendedDataServices,
     *     FollowSource?: int,
     *     Inputs?: list<InputTemplate>,
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
