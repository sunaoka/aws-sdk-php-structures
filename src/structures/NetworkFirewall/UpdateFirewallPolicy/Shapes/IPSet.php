<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Definition
 */
class IPSet extends Shape
{
    /**
     * @param array{Definition: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
