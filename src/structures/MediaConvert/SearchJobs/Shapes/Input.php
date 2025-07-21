<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $AdvancedInputFilter
 * @property AdvancedInputFilterSettings|null $AdvancedInputFilterSettings
 * @property array<string, AudioSelectorGroup>|null $AudioSelectorGroups
 * @property array<string, AudioSelector>|null $AudioSelectors
 * @property array<string, CaptionSelector>|null $CaptionSelectors
 * @property Rectangle|null $Crop
 * @property 'ENABLED'|'DISABLED'|null $DeblockFilter
 * @property InputDecryptionSettings|null $DecryptionSettings
 * @property 'ENABLED'|'DISABLED'|null $DenoiseFilter
 * @property string|null $DolbyVisionMetadataXml
 * @property array<string, DynamicAudioSelector>|null $DynamicAudioSelectors
 * @property string|null $FileInput
 * @property 'AUTO'|'DISABLE'|'FORCE'|null $FilterEnable
 * @property int<0, 5>|null $FilterStrength
 * @property ImageInserter|null $ImageInserter
 * @property list<InputClipping>|null $InputClippings
 * @property 'AUTO'|'PSF'|null $InputScanType
 * @property Rectangle|null $Position
 * @property int<1, 2147483647>|null $ProgramNumber
 * @property 'IGNORE_PSI'|'USE_PSI'|null $PsiControl
 * @property list<string>|null $SupplementalImps
 * @property InputTamsSettings|null $TamsSettings
 * @property 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART'|null $TimecodeSource
 * @property string|null $TimecodeStart
 * @property InputVideoGenerator|null $VideoGenerator
 * @property list<VideoOverlay>|null $VideoOverlays
 * @property VideoSelector|null $VideoSelector
 */
class Input extends Shape
{
    /**
     * @param array{
     *     AdvancedInputFilter?: 'ENABLED'|'DISABLED'|null,
     *     AdvancedInputFilterSettings?: AdvancedInputFilterSettings|null,
     *     AudioSelectorGroups?: array<string, AudioSelectorGroup>|null,
     *     AudioSelectors?: array<string, AudioSelector>|null,
     *     CaptionSelectors?: array<string, CaptionSelector>|null,
     *     Crop?: Rectangle|null,
     *     DeblockFilter?: 'ENABLED'|'DISABLED'|null,
     *     DecryptionSettings?: InputDecryptionSettings|null,
     *     DenoiseFilter?: 'ENABLED'|'DISABLED'|null,
     *     DolbyVisionMetadataXml?: string|null,
     *     DynamicAudioSelectors?: array<string, DynamicAudioSelector>|null,
     *     FileInput?: string|null,
     *     FilterEnable?: 'AUTO'|'DISABLE'|'FORCE'|null,
     *     FilterStrength?: int<0, 5>|null,
     *     ImageInserter?: ImageInserter|null,
     *     InputClippings?: list<InputClipping>|null,
     *     InputScanType?: 'AUTO'|'PSF'|null,
     *     Position?: Rectangle|null,
     *     ProgramNumber?: int<1, 2147483647>|null,
     *     PsiControl?: 'IGNORE_PSI'|'USE_PSI'|null,
     *     SupplementalImps?: list<string>|null,
     *     TamsSettings?: InputTamsSettings|null,
     *     TimecodeSource?: 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART'|null,
     *     TimecodeStart?: string|null,
     *     VideoGenerator?: InputVideoGenerator|null,
     *     VideoOverlays?: list<VideoOverlay>|null,
     *     VideoSelector?: VideoSelector|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
