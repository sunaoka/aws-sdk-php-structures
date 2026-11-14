<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateNetworkingFlexCostAllocationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FcaPolicyId
 * @property list<string>|null $NetworkResourceIds
 * @property Shapes\FlexCostAllocationNetworkResourceScope|null $NetworkResourceScope
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class AssociateNetworkingFlexCostAllocationPolicyRequest extends Request
{
    /**
     * @param array{
     *     FcaPolicyId: string,
     *     NetworkResourceIds?: list<string>|null,
     *     NetworkResourceScope?: Shapes\FlexCostAllocationNetworkResourceScope|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
