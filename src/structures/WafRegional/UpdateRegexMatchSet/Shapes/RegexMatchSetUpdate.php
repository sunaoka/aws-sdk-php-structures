<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateRegexMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property RegexMatchTuple $RegexMatchTuple
 */
class RegexMatchSetUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     RegexMatchTuple: RegexMatchTuple
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
