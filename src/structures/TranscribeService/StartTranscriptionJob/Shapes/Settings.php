<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VocabularyName
 * @property bool|null $ShowSpeakerLabels
 * @property int<2, 30>|null $MaxSpeakerLabels
 * @property bool|null $ChannelIdentification
 * @property bool|null $ShowAlternatives
 * @property int<2, 10>|null $MaxAlternatives
 * @property string|null $VocabularyFilterName
 * @property 'remove'|'mask'|'tag'|null $VocabularyFilterMethod
 */
class Settings extends Shape
{
    /**
     * @param array{
     *     VocabularyName?: string|null,
     *     ShowSpeakerLabels?: bool|null,
     *     MaxSpeakerLabels?: int<2, 30>|null,
     *     ChannelIdentification?: bool|null,
     *     ShowAlternatives?: bool|null,
     *     MaxAlternatives?: int<2, 10>|null,
     *     VocabularyFilterName?: string|null,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
