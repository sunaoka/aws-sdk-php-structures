<?php

namespace Sunaoka\Aws\Structures\Translate\ListLanguages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LanguageName
 * @property string $LanguageCode
 */
class Language extends Shape
{
    /**
     * @param array{
     *     LanguageName: string,
     *     LanguageCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
