<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TextTransformation> $TextTransformations
 */
class RateLimitUriPath extends Shape
{
    /**
     * @param array{TextTransformations: list<TextTransformation>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
