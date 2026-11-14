<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkingFlexCostAllocationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FcaPolicyId
 * @property Shapes\NatFlexCostAllocationPolicyDocument|null $NatFcaPolicyDocument
 * @property Shapes\InstanceFlexCostAllocationPolicyDocument|null $InstanceFcaPolicyDocument
 * @property Shapes\PcxFlexCostAllocationPolicyDocument|null $PcxFcaPolicyDocument
 * @property bool|null $ShowBackEnabled
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class ModifyNetworkingFlexCostAllocationPolicyRequest extends Request
{
    /**
     * @param array{
     *     FcaPolicyId: string,
     *     NatFcaPolicyDocument?: Shapes\NatFlexCostAllocationPolicyDocument|null,
     *     InstanceFcaPolicyDocument?: Shapes\InstanceFlexCostAllocationPolicyDocument|null,
     *     PcxFcaPolicyDocument?: Shapes\PcxFlexCostAllocationPolicyDocument|null,
     *     ShowBackEnabled?: bool|null,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
