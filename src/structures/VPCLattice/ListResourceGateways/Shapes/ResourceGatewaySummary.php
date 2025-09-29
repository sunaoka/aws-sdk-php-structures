<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property string|null $arn
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property string|null $vpcIdentifier
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property 'IPV4'|'IPV6'|'DUALSTACK'|null $ipAddressType
 * @property int<1, 62>|null $ipv4AddressesPerEni
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class ResourceGatewaySummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     arn?: string|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null,
     *     vpcIdentifier?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|'DUALSTACK'|null,
     *     ipv4AddressesPerEni?: int<1, 62>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
