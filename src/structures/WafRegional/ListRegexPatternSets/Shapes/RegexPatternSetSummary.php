<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListRegexPatternSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegexPatternSetId
 * @property string $Name
 */
class RegexPatternSetSummary extends Shape
{
    /**
     * @param array{
     *     RegexPatternSetId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
