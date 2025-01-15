<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrivateDnsName
 * @property string|null $PrivateIpAddress
 */
class PrivateIpAddressDetails extends Shape
{
    /**
     * @param array{
     *     PrivateDnsName?: string|null,
     *     PrivateIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
