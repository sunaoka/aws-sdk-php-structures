<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ShowSpeakerLabels
 * @property int $MaxSpeakerLabels
 * @property bool $ChannelIdentification
 * @property string $VocabularyName
 * @property string $VocabularyFilterName
 * @property 'remove'|'mask'|'tag' $VocabularyFilterMethod
 */
class MedicalScribeSettings extends Shape
{
    /**
     * @param array{
     *     ShowSpeakerLabels?: bool,
     *     MaxSpeakerLabels?: int,
     *     ChannelIdentification?: bool,
     *     VocabularyName?: string,
     *     VocabularyFilterName?: string,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
