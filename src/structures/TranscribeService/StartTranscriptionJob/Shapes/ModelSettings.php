<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LanguageModelName
 */
class ModelSettings extends Shape
{
    /**
     * @param array{LanguageModelName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
