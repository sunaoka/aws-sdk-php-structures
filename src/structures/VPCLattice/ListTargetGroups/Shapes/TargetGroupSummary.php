<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null $type
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property int<1, 65535>|null $port
 * @property 'HTTP'|'HTTPS'|'TCP'|null $protocol
 * @property 'IPV4'|'IPV6'|null $ipAddressType
 * @property string|null $vpcIdentifier
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property list<string>|null $serviceArns
 * @property 'V1'|'V2'|null $lambdaEventStructureVersion
 */
class TargetGroupSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     type?: 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     port?: int<1, 65535>|null,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP'|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|null,
     *     vpcIdentifier?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     serviceArns?: list<string>|null,
     *     lambdaEventStructureVersion?: 'V1'|'V2'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
