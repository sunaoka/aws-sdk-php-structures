<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamInternetRegistryAssociationAsns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Asn
 * @property \Aws\Api\DateTimeResult|null $LastObservedAt
 */
class IpamInternetRegistryAssociationAsn extends Shape
{
    /**
     * @param array{
     *     Asn?: string|null,
     *     LastObservedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
