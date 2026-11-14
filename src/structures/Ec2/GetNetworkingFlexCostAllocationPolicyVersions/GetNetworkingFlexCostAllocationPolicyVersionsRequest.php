<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkingFlexCostAllocationPolicyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FcaPolicyId
 * @property list<int<1, 2147483647>>|null $VersionsToInclude
 * @property bool|null $DryRun
 */
class GetNetworkingFlexCostAllocationPolicyVersionsRequest extends Request
{
    /**
     * @param array{
     *     FcaPolicyId: string,
     *     VersionsToInclude?: list<int<1, 2147483647>>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
