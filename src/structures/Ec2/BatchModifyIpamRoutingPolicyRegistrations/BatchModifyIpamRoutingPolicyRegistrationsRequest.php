<?php

namespace Sunaoka\Aws\Structures\Ec2\BatchModifyIpamRoutingPolicyRegistrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamInternetRegistryAssociationId
 * @property string $DeltaJson
 * @property bool|null $Force
 * @property string|null $ClientToken
 */
class BatchModifyIpamRoutingPolicyRegistrationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamInternetRegistryAssociationId: string,
     *     DeltaJson: string,
     *     Force?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
