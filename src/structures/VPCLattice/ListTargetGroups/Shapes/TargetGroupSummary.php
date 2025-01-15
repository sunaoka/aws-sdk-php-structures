<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $id
 * @property 'IPV4'|'IPV6'|null $ipAddressType
 * @property 'V1'|'V2'|null $lambdaEventStructureVersion
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property int<1, 65535>|null $port
 * @property 'HTTP'|'HTTPS'|'TCP'|null $protocol
 * @property list<string>|null $serviceArns
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null $type
 * @property string|null $vpcIdentifier
 */
class TargetGroupSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|null,
     *     lambdaEventStructureVersion?: 'V1'|'V2'|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     port?: int<1, 65535>|null,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP'|null,
     *     serviceArns?: list<string>|null,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     type?: 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null,
     *     vpcIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
