<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ShowSpeakerLabels
 * @property int<2, 30> $MaxSpeakerLabels
 * @property bool $ChannelIdentification
 * @property bool $ShowAlternatives
 * @property int<2, 10> $MaxAlternatives
 * @property string $VocabularyName
 */
class MedicalTranscriptionSetting extends Shape
{
    /**
     * @param array{
     *     ShowSpeakerLabels?: bool,
     *     MaxSpeakerLabels?: int<2, 30>,
     *     ChannelIdentification?: bool,
     *     ShowAlternatives?: bool,
     *     MaxAlternatives?: int<2, 10>,
     *     VocabularyName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
