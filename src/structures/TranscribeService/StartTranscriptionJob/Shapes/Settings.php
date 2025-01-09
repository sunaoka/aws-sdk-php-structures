<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VocabularyName
 * @property bool $ShowSpeakerLabels
 * @property int $MaxSpeakerLabels
 * @property bool $ChannelIdentification
 * @property bool $ShowAlternatives
 * @property int $MaxAlternatives
 * @property string $VocabularyFilterName
 * @property 'remove'|'mask'|'tag' $VocabularyFilterMethod
 */
class Settings extends Shape
{
    /**
     * @param array{
     *     VocabularyName?: string,
     *     ShowSpeakerLabels?: bool,
     *     MaxSpeakerLabels?: int,
     *     ChannelIdentification?: bool,
     *     ShowAlternatives?: bool,
     *     MaxAlternatives?: int,
     *     VocabularyFilterName?: string,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
