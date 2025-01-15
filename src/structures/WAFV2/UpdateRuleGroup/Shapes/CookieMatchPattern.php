<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property All|null $All
 * @property list<string>|null $IncludedCookies
 * @property list<string>|null $ExcludedCookies
 */
class CookieMatchPattern extends Shape
{
    /**
     * @param array{
     *     All?: All|null,
     *     IncludedCookies?: list<string>|null,
     *     ExcludedCookies?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
