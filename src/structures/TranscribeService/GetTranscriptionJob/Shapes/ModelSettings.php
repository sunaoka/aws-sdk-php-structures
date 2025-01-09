<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LanguageModelName
 */
class ModelSettings extends Shape
{
    /**
     * @param array{LanguageModelName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
