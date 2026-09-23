<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Standard'|'Neural'|'Deepgram'|'Advanced'|null $speechModelPreference
 * @property SpeechModelConfig|null $speechModelConfig
 */
class SpeechRecognitionSettings extends Shape
{
    /**
     * @param array{
     *     speechModelPreference?: 'Standard'|'Neural'|'Deepgram'|'Advanced'|null,
     *     speechModelConfig?: SpeechModelConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
