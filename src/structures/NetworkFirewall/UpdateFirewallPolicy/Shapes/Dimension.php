<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 */
class Dimension extends Shape
{
    /**
     * @param array{Value: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
