<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkingFlexCostAllocationPolicyVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FcaPolicyId
 * @property int<1, 2147483647>|null $Version
 * @property 'natgw'|'pcx'|'ec2'|null $NetworkResourceType
 * @property NatFlexCostAllocationPolicyDocument|null $NatFcaPolicyDocument
 * @property InstanceFlexCostAllocationPolicyDocument|null $InstanceFcaPolicyDocument
 * @property PcxFlexCostAllocationPolicyDocument|null $PcxFcaPolicyDocument
 * @property bool|null $ShowBackEnabled
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ExpectedEffectiveAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class FlexCostAllocationPolicyVersion extends Shape
{
    /**
     * @param array{
     *     FcaPolicyId?: string|null,
     *     Version?: int<1, 2147483647>|null,
     *     NetworkResourceType?: 'natgw'|'pcx'|'ec2'|null,
     *     NatFcaPolicyDocument?: NatFlexCostAllocationPolicyDocument|null,
     *     InstanceFcaPolicyDocument?: InstanceFlexCostAllocationPolicyDocument|null,
     *     PcxFcaPolicyDocument?: PcxFlexCostAllocationPolicyDocument|null,
     *     ShowBackEnabled?: bool|null,
     *     Description?: string|null,
     *     ExpectedEffectiveAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
