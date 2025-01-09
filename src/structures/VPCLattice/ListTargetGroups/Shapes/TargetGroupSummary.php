<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property 'IPV4'|'IPV6' $ipAddressType
 * @property 'V1'|'V2' $lambdaEventStructureVersion
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property int $port
 * @property 'HTTP'|'HTTPS'|'TCP' $protocol
 * @property list<string> $serviceArns
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB' $type
 * @property string $vpcIdentifier
 */
class TargetGroupSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     ipAddressType?: 'IPV4'|'IPV6',
     *     lambdaEventStructureVersion?: 'V1'|'V2',
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     port?: int,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP',
     *     serviceArns?: list<string>,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED',
     *     type?: 'IP'|'LAMBDA'|'INSTANCE'|'ALB',
     *     vpcIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
