<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $AdvancedInputFilter
 * @property AdvancedInputFilterSettings $AdvancedInputFilterSettings
 * @property array<string, AudioSelectorGroup> $AudioSelectorGroups
 * @property array<string, AudioSelector> $AudioSelectors
 * @property array<string, CaptionSelector> $CaptionSelectors
 * @property Rectangle $Crop
 * @property 'ENABLED'|'DISABLED' $DeblockFilter
 * @property InputDecryptionSettings $DecryptionSettings
 * @property 'ENABLED'|'DISABLED' $DenoiseFilter
 * @property string $DolbyVisionMetadataXml
 * @property string $FileInput
 * @property 'AUTO'|'DISABLE'|'FORCE' $FilterEnable
 * @property int<0, 5> $FilterStrength
 * @property ImageInserter $ImageInserter
 * @property list<InputClipping> $InputClippings
 * @property 'AUTO'|'PSF' $InputScanType
 * @property Rectangle $Position
 * @property int<1, 2147483647> $ProgramNumber
 * @property 'IGNORE_PSI'|'USE_PSI' $PsiControl
 * @property list<string> $SupplementalImps
 * @property 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART' $TimecodeSource
 * @property string $TimecodeStart
 * @property InputVideoGenerator $VideoGenerator
 * @property list<VideoOverlay> $VideoOverlays
 * @property VideoSelector $VideoSelector
 */
class Input extends Shape
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
     *     DecryptionSettings?: InputDecryptionSettings,
     *     DenoiseFilter?: 'ENABLED'|'DISABLED',
     *     DolbyVisionMetadataXml?: string,
     *     FileInput?: string,
     *     FilterEnable?: 'AUTO'|'DISABLE'|'FORCE',
     *     FilterStrength?: int<0, 5>,
     *     ImageInserter?: ImageInserter,
     *     InputClippings?: list<InputClipping>,
     *     InputScanType?: 'AUTO'|'PSF',
     *     Position?: Rectangle,
     *     ProgramNumber?: int<1, 2147483647>,
     *     PsiControl?: 'IGNORE_PSI'|'USE_PSI',
     *     SupplementalImps?: list<string>,
     *     TimecodeSource?: 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART',
     *     TimecodeStart?: string,
     *     VideoGenerator?: InputVideoGenerator,
     *     VideoOverlays?: list<VideoOverlay>,
     *     VideoSelector?: VideoSelector
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
