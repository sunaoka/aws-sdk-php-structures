<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSupportedLanguages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property string|null $language
 * @property string|null $display
 */
class SupportedLanguage extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     language?: string|null,
     *     display?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
