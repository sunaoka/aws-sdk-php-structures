<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockAction $Block
 * @property AllowAction $Allow
 */
class DefaultAction extends Shape
{
    /**
     * @param array{
     *     Block?: BlockAction,
     *     Allow?: AllowAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
