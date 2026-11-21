<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string|null $DisplayAs
 */
class VocabularyPhrase extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     DisplayAs?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
