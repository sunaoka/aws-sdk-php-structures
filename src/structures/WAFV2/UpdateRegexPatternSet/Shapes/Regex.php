<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRegexPatternSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegexString
 */
class Regex extends Shape
{
    /**
     * @param array{RegexString?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
