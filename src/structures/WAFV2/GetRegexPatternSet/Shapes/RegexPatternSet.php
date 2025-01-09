<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRegexPatternSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $ARN
 * @property string $Description
 * @property list<Regex> $RegularExpressionList
 */
class RegexPatternSet extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Id?: string,
     *     ARN?: string,
     *     Description?: string,
     *     RegularExpressionList?: list<Regex>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
