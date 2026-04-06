<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeepgramSpeechModelConfig|null $deepgramConfig
 */
class SpeechModelConfig extends Shape
{
    /**
     * @param array{deepgramConfig?: DeepgramSpeechModelConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
