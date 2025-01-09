<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TextTransformation> $TextTransformations
 */
class RateLimitQueryString extends Shape
{
    /**
     * @param array{TextTransformations: list<TextTransformation>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
