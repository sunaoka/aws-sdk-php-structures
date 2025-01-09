<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property 'IPV4'|'IPV6'|'DUALSTACK' $ipAddressType
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property list<string> $securityGroupIds
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property list<string> $subnetIds
 * @property string $vpcIdentifier
 */
class ResourceGatewaySummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     ipAddressType?: 'IPV4'|'IPV6'|'DUALSTACK',
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     securityGroupIds?: list<string>,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     subnetIds?: list<string>,
     *     vpcIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
