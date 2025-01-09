<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MATCH'|'NO_MATCH' $FallbackBehavior
 */
class JA3Fingerprint extends Shape
{
    /**
     * @param array{FallbackBehavior: 'MATCH'|'NO_MATCH'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
