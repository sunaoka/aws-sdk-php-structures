<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRouteProtectionFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property string|null $Asn
 * @property \Aws\Api\DateTimeResult|null $DetectedAt
 */
class IpamRouteOverlap extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Asn?: string|null,
     *     DetectedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
