<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Standard'|'Neural'|'Deepgram'|null $speechModelPreference
 * @property SpeechModelConfig|null $speechModelConfig
 */
class SpeechRecognitionSettings extends Shape
{
    /**
     * @param array{
     *     speechModelPreference?: 'Standard'|'Neural'|'Deepgram'|null,
     *     speechModelConfig?: SpeechModelConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
