<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JsonMatchPattern $MatchPattern
 * @property 'ALL'|'KEY'|'VALUE' $MatchScope
 * @property 'MATCH'|'NO_MATCH'|'EVALUATE_AS_STRING'|null $InvalidFallbackBehavior
 * @property 'CONTINUE'|'MATCH'|'NO_MATCH'|null $OversizeHandling
 */
class JsonBody extends Shape
{
    /**
     * @param array{
     *     MatchPattern: JsonMatchPattern,
     *     MatchScope: 'ALL'|'KEY'|'VALUE',
     *     InvalidFallbackBehavior?: 'MATCH'|'NO_MATCH'|'EVALUATE_AS_STRING'|null,
     *     OversizeHandling?: 'CONTINUE'|'MATCH'|'NO_MATCH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
