<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FORMAL'|'INFORMAL' $Formality
 * @property 'MASK' $Profanity
 * @property 'ON' $Brevity
 */
class TranslationSettings extends Shape
{
    /**
     * @param array{
     *     Formality?: 'FORMAL'|'INFORMAL',
     *     Profanity?: 'MASK',
     *     Brevity?: 'ON'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
