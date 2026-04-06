<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ShowSpeakerLabels
 * @property int<2, 30>|null $MaxSpeakerLabels
 * @property bool|null $ChannelIdentification
 * @property bool|null $ShowAlternatives
 * @property int<2, 10>|null $MaxAlternatives
 * @property string|null $VocabularyName
 */
class MedicalTranscriptionSetting extends Shape
{
    /**
     * @param array{
     *     ShowSpeakerLabels?: bool|null,
     *     MaxSpeakerLabels?: int<2, 30>|null,
     *     ChannelIdentification?: bool|null,
     *     ShowAlternatives?: bool|null,
     *     MaxAlternatives?: int<2, 10>|null,
     *     VocabularyName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
