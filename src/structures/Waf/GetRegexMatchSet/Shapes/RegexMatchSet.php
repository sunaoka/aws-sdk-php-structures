<?php

namespace Sunaoka\Aws\Structures\Waf\GetRegexMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegexMatchSetId
 * @property string $Name
 * @property list<RegexMatchTuple> $RegexMatchTuples
 */
class RegexMatchSet extends Shape
{
    /**
     * @param array{
     *     RegexMatchSetId?: string,
     *     Name?: string,
     *     RegexMatchTuples?: list<RegexMatchTuple>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
