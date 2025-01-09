<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VocabularyName
 * @property bool $ShowSpeakerLabels
 * @property int<2, 30> $MaxSpeakerLabels
 * @property bool $ChannelIdentification
 * @property bool $ShowAlternatives
 * @property int<2, 10> $MaxAlternatives
 * @property string $VocabularyFilterName
 * @property 'remove'|'mask'|'tag' $VocabularyFilterMethod
 */
class Settings extends Shape
{
    /**
     * @param array{
     *     VocabularyName?: string,
     *     ShowSpeakerLabels?: bool,
     *     MaxSpeakerLabels?: int<2, 30>,
     *     ChannelIdentification?: bool,
     *     ShowAlternatives?: bool,
     *     MaxAlternatives?: int<2, 10>,
     *     VocabularyFilterName?: string,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
