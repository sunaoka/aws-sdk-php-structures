<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockAction|null $Block
 * @property AllowAction|null $Allow
 */
class DefaultAction extends Shape
{
    /**
     * @param array{
     *     Block?: BlockAction|null,
     *     Allow?: AllowAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
