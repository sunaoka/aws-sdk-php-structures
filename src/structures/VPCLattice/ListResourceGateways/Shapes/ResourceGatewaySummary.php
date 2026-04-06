<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $id
 * @property 'IPV4'|'IPV6'|'DUALSTACK'|null $ipAddressType
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property list<string>|null $securityGroupIds
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property list<string>|null $subnetIds
 * @property string|null $vpcIdentifier
 */
class ResourceGatewaySummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|'DUALSTACK'|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null,
     *     subnetIds?: list<string>|null,
     *     vpcIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
