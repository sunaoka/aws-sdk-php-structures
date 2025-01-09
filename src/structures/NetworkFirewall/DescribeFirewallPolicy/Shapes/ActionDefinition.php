<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublishMetricAction $PublishMetricAction
 */
class ActionDefinition extends Shape
{
    /**
     * @param array{PublishMetricAction?: PublishMetricAction} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
