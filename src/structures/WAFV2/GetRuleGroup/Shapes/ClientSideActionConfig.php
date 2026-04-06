<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientSideAction $Challenge
 */
class ClientSideActionConfig extends Shape
{
    /**
     * @param array{Challenge: ClientSideAction} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
