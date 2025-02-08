<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ShowSpeakerLabels
 * @property int<2, 30>|null $MaxSpeakerLabels
 * @property bool|null $ChannelIdentification
 * @property string|null $VocabularyName
 * @property string|null $VocabularyFilterName
 * @property 'remove'|'mask'|'tag'|null $VocabularyFilterMethod
 * @property ClinicalNoteGenerationSettings|null $ClinicalNoteGenerationSettings
 */
class MedicalScribeSettings extends Shape
{
    /**
     * @param array{
     *     ShowSpeakerLabels?: bool|null,
     *     MaxSpeakerLabels?: int<2, 30>|null,
     *     ChannelIdentification?: bool|null,
     *     VocabularyName?: string|null,
     *     VocabularyFilterName?: string|null,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag'|null,
     *     ClinicalNoteGenerationSettings?: ClinicalNoteGenerationSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
