<?php

namespace Sunaoka\Aws\Structures\Translate\StartTextTranslationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FORMAL'|'INFORMAL'|null $Formality
 * @property 'MASK'|null $Profanity
 */
class TranslationSettings extends Shape
{
    /**
     * @param array{
     *     Formality?: 'FORMAL'|'INFORMAL'|null,
     *     Profanity?: 'MASK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
