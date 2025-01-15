<?php

namespace Sunaoka\Aws\Structures\Waf\CreateRegexMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegexMatchSetId
 * @property string|null $Name
 * @property list<RegexMatchTuple>|null $RegexMatchTuples
 */
class RegexMatchSet extends Shape
{
    /**
     * @param array{
     *     RegexMatchSetId?: string|null,
     *     Name?: string|null,
     *     RegexMatchTuples?: list<RegexMatchTuple>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
