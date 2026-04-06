<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FORMAL'|'INFORMAL'|null $Formality
 * @property 'MASK'|null $Profanity
 * @property 'ON'|null $Brevity
 */
class TranslationSettings extends Shape
{
    /**
     * @param array{
     *     Formality?: 'FORMAL'|'INFORMAL'|null,
     *     Profanity?: 'MASK'|null,
     *     Brevity?: 'ON'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
