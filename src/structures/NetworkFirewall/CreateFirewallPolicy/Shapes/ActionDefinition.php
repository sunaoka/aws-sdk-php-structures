<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublishMetricAction|null $PublishMetricAction
 */
class ActionDefinition extends Shape
{
    /**
     * @param array{PublishMetricAction?: PublishMetricAction|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
