<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HeaderMatchPattern $MatchPattern
 * @property 'ALL'|'KEY'|'VALUE' $MatchScope
 * @property 'CONTINUE'|'MATCH'|'NO_MATCH' $OversizeHandling
 */
class Headers extends Shape
{
    /**
     * @param array{
     *     MatchPattern: HeaderMatchPattern,
     *     MatchScope: 'ALL'|'KEY'|'VALUE',
     *     OversizeHandling: 'CONTINUE'|'MATCH'|'NO_MATCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
