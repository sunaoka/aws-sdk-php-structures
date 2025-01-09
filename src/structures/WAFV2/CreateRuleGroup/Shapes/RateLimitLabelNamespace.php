<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 */
class RateLimitLabelNamespace extends Shape
{
    /**
     * @param array{Namespace: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
