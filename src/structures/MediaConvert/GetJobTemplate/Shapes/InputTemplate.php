<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $AdvancedInputFilter
 * @property AdvancedInputFilterSettings $AdvancedInputFilterSettings
 * @property array<string, AudioSelectorGroup> $AudioSelectorGroups
 * @property array<string, AudioSelector> $AudioSelectors
 * @property array<string, CaptionSelector> $CaptionSelectors
 * @property Rectangle $Crop
 * @property 'ENABLED'|'DISABLED' $DeblockFilter
 * @property 'ENABLED'|'DISABLED' $DenoiseFilter
 * @property string $DolbyVisionMetadataXml
 * @property 'AUTO'|'DISABLE'|'FORCE' $FilterEnable
 * @property int $FilterStrength
 * @property ImageInserter $ImageInserter
 * @property list<InputClipping> $InputClippings
 * @property 'AUTO'|'PSF' $InputScanType
 * @property Rectangle $Position
 * @property int $ProgramNumber
 * @property 'IGNORE_PSI'|'USE_PSI' $PsiControl
 * @property 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART' $TimecodeSource
 * @property string $TimecodeStart
 * @property list<VideoOverlay> $VideoOverlays
 * @property VideoSelector $VideoSelector
 */
class InputTemplate extends Shape
{
    /**
     * @param array{
     *     AdvancedInputFilter?: 'ENABLED'|'DISABLED',
     *     AdvancedInputFilterSettings?: AdvancedInputFilterSettings,
     *     AudioSelectorGroups?: array<string, AudioSelectorGroup>,
     *     AudioSelectors?: array<string, AudioSelector>,
     *     CaptionSelectors?: array<string, CaptionSelector>,
     *     Crop?: Rectangle,
     *     DeblockFilter?: 'ENABLED'|'DISABLED',
     *     DenoiseFilter?: 'ENABLED'|'DISABLED',
     *     DolbyVisionMetadataXml?: string,
     *     FilterEnable?: 'AUTO'|'DISABLE'|'FORCE',
     *     FilterStrength?: int,
     *     ImageInserter?: ImageInserter,
     *     InputClippings?: list<InputClipping>,
     *     InputScanType?: 'AUTO'|'PSF',
     *     Position?: Rectangle,
     *     ProgramNumber?: int,
     *     PsiControl?: 'IGNORE_PSI'|'USE_PSI',
     *     TimecodeSource?: 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART',
     *     TimecodeStart?: string,
     *     VideoOverlays?: list<VideoOverlay>,
     *     VideoSelector?: VideoSelector
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
