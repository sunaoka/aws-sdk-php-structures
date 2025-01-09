<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetRegexPatternSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegexPatternSetId
 * @property string $Name
 * @property list<string> $RegexPatternStrings
 */
class RegexPatternSet extends Shape
{
    /**
     * @param array{
     *     RegexPatternSetId: string,
     *     Name?: string,
     *     RegexPatternStrings: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
