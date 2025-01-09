<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSupportedLanguages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $language
 * @property string $display
 */
class SupportedLanguage extends Shape
{
    /**
     * @param array{
     *     code?: string,
     *     language?: string,
     *     display?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
