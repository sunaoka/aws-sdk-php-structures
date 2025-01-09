<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property All $All
 * @property list<string> $IncludedCookies
 * @property list<string> $ExcludedCookies
 */
class CookieMatchPattern extends Shape
{
    /**
     * @param array{
     *     All?: All,
     *     IncludedCookies?: list<string>,
     *     ExcludedCookies?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
