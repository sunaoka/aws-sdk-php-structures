<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrivateDnsName
 * @property string $PrivateIpAddress
 */
class PrivateIpAddressDetails extends Shape
{
    /**
     * @param array{
     *     PrivateDnsName?: string,
     *     PrivateIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
