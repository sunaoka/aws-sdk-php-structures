<?php

namespace Sunaoka\Aws\Structures\Ec2\ApplySecurityGroupsToClientVpnTargetNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $VpcId
 * @property list<string> $SecurityGroupIds
 * @property bool|null $DryRun
 */
class ApplySecurityGroupsToClientVpnTargetNetworkRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     VpcId: string,
     *     SecurityGroupIds: list<string>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
