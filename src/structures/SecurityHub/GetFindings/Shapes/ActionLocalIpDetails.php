<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddressV4
 */
class ActionLocalIpDetails extends Shape
{
    /**
     * @param array{IpAddressV4?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
