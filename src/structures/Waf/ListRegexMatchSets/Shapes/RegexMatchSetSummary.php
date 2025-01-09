<?php

namespace Sunaoka\Aws\Structures\Waf\ListRegexMatchSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegexMatchSetId
 * @property string $Name
 */
class RegexMatchSetSummary extends Shape
{
    /**
     * @param array{
     *     RegexMatchSetId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
