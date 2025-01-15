<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRegexPatternSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Id
 * @property string|null $ARN
 * @property string|null $Description
 * @property list<Regex>|null $RegularExpressionList
 */
class RegexPatternSet extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Id?: string|null,
     *     ARN?: string|null,
     *     Description?: string|null,
     *     RegularExpressionList?: list<Regex>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
