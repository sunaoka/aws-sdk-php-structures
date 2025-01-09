<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Dimension> $Dimensions
 */
class PublishMetricAction extends Shape
{
    /**
     * @param array{Dimensions: list<Dimension>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
