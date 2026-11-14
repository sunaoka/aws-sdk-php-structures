<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkingFlexCostAllocationPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FcaPolicyIds
 * @property bool|null $DryRun
 */
class DeleteNetworkingFlexCostAllocationPoliciesRequest extends Request
{
    /**
     * @param array{
     *     FcaPolicyIds: list<string>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
