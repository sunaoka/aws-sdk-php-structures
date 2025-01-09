<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CountAction $Count
 * @property NoneAction $None
 */
class OverrideAction extends Shape
{
    /**
     * @param array{
     *     Count?: CountAction,
     *     None?: NoneAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
