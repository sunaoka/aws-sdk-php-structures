<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MATCH'|'NO_MATCH'|null $FallbackBehavior
 */
class UriFragment extends Shape
{
    /**
     * @param array{FallbackBehavior?: 'MATCH'|'NO_MATCH'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
