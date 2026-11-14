<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkingFlexCostAllocationPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FcaPolicyId
 * @property string|null $FcaPolicyArn
 * @property 'natgw'|'pcx'|'ec2'|null $NetworkResourceType
 * @property NatFlexCostAllocationPolicyDocument|null $NatFcaPolicyDocument
 * @property InstanceFlexCostAllocationPolicyDocument|null $InstanceFcaPolicyDocument
 * @property PcxFlexCostAllocationPolicyDocument|null $PcxFcaPolicyDocument
 * @property bool|null $ShowBackEnabled
 * @property string|null $OwnerAccount
 * @property string|null $Description
 * @property int<1, 2147483647>|null $LatestVersion
 * @property \Aws\Api\DateTimeResult|null $VersionExpectedEffectiveAt
 * @property \Aws\Api\DateTimeResult|null $PolicyCreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property 'account'|'declarative-policy'|null $ManagedBy
 * @property list<Tag>|null $Tags
 */
class FlexCostAllocationPolicyDescription extends Shape
{
    /**
     * @param array{
     *     FcaPolicyId?: string|null,
     *     FcaPolicyArn?: string|null,
     *     NetworkResourceType?: 'natgw'|'pcx'|'ec2'|null,
     *     NatFcaPolicyDocument?: NatFlexCostAllocationPolicyDocument|null,
     *     InstanceFcaPolicyDocument?: InstanceFlexCostAllocationPolicyDocument|null,
     *     PcxFcaPolicyDocument?: PcxFlexCostAllocationPolicyDocument|null,
     *     ShowBackEnabled?: bool|null,
     *     OwnerAccount?: string|null,
     *     Description?: string|null,
     *     LatestVersion?: int<1, 2147483647>|null,
     *     VersionExpectedEffectiveAt?: \Aws\Api\DateTimeResult|null,
     *     PolicyCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ManagedBy?: 'account'|'declarative-policy'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
