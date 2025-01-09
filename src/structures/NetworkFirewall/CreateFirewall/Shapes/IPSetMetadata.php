<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ResolvedCIDRCount
 */
class IPSetMetadata extends Shape
{
    /**
     * @param array{ResolvedCIDRCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
