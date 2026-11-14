<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateNetworkingFlexCostAllocationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FcaPolicyAssociationIds
 * @property bool|null $DryRun
 */
class DisassociateNetworkingFlexCostAllocationPolicyRequest extends Request
{
    /**
     * @param array{
     *     FcaPolicyAssociationIds: list<string>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
