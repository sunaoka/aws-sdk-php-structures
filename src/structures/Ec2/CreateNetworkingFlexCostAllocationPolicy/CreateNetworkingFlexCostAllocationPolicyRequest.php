<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkingFlexCostAllocationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'natgw'|'pcx'|'ec2' $NetworkResourceType
 * @property Shapes\NatFlexCostAllocationPolicyDocument|null $NatFcaPolicyDocument
 * @property Shapes\InstanceFlexCostAllocationPolicyDocument|null $InstanceFcaPolicyDocument
 * @property Shapes\PcxFlexCostAllocationPolicyDocument|null $PcxFcaPolicyDocument
 * @property bool|null $ShowBackEnabled
 * @property string|null $Description
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class CreateNetworkingFlexCostAllocationPolicyRequest extends Request
{
    /**
     * @param array{
     *     NetworkResourceType: 'natgw'|'pcx'|'ec2',
     *     NatFcaPolicyDocument?: Shapes\NatFlexCostAllocationPolicyDocument|null,
     *     InstanceFcaPolicyDocument?: Shapes\InstanceFlexCostAllocationPolicyDocument|null,
     *     PcxFcaPolicyDocument?: Shapes\PcxFlexCostAllocationPolicyDocument|null,
     *     ShowBackEnabled?: bool|null,
     *     Description?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
