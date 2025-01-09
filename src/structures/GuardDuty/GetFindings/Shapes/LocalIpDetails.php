<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddressV4
 * @property string $IpAddressV6
 */
class LocalIpDetails extends Shape
{
    /**
     * @param array{
     *     IpAddressV4?: string,
     *     IpAddressV6?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
