<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JsonMatchPattern $MatchPattern
 * @property 'ALL'|'KEY'|'VALUE' $MatchScope
 * @property 'MATCH'|'NO_MATCH'|'EVALUATE_AS_STRING' $InvalidFallbackBehavior
 * @property 'CONTINUE'|'MATCH'|'NO_MATCH' $OversizeHandling
 */
class JsonBody extends Shape
{
    /**
     * @param array{
     *     MatchPattern: JsonMatchPattern,
     *     MatchScope: 'ALL'|'KEY'|'VALUE',
     *     InvalidFallbackBehavior?: 'MATCH'|'NO_MATCH'|'EVALUATE_AS_STRING',
     *     OversizeHandling?: 'CONTINUE'|'MATCH'|'NO_MATCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
