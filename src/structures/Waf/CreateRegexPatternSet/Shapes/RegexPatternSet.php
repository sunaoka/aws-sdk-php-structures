<?php

namespace Sunaoka\Aws\Structures\Waf\CreateRegexPatternSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegexPatternSetId
 * @property string|null $Name
 * @property list<string> $RegexPatternStrings
 */
class RegexPatternSet extends Shape
{
    /**
     * @param array{
     *     RegexPatternSetId: string,
     *     Name?: string|null,
     *     RegexPatternStrings: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
