<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ShowSpeakerLabels
 * @property int $MaxSpeakerLabels
 * @property bool $ChannelIdentification
 * @property bool $ShowAlternatives
 * @property int $MaxAlternatives
 * @property string $VocabularyName
 */
class MedicalTranscriptionSetting extends Shape
{
    /**
     * @param array{
     *     ShowSpeakerLabels?: bool,
     *     MaxSpeakerLabels?: int,
     *     ChannelIdentification?: bool,
     *     ShowAlternatives?: bool,
     *     MaxAlternatives?: int,
     *     VocabularyName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
