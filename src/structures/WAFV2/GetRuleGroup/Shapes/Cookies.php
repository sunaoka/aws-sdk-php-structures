<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CookieMatchPattern $MatchPattern
 * @property 'ALL'|'KEY'|'VALUE' $MatchScope
 * @property 'CONTINUE'|'MATCH'|'NO_MATCH' $OversizeHandling
 */
class Cookies extends Shape
{
    /**
     * @param array{
     *     MatchPattern: CookieMatchPattern,
     *     MatchScope: 'ALL'|'KEY'|'VALUE',
     *     OversizeHandling: 'CONTINUE'|'MATCH'|'NO_MATCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
