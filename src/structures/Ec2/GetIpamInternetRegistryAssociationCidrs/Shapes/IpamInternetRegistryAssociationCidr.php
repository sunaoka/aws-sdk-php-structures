<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamInternetRegistryAssociationCidrs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property \Aws\Api\DateTimeResult|null $LastObservedAt
 */
class IpamInternetRegistryAssociationCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     LastObservedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
