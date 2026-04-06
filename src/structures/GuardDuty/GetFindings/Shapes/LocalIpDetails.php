<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddressV4
 * @property string|null $IpAddressV6
 */
class LocalIpDetails extends Shape
{
    /**
     * @param array{
     *     IpAddressV4?: string|null,
     *     IpAddressV6?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
