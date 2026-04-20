<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateClientVpnTargetNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string|null $SubnetId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 */
class AssociateClientVpnTargetNetworkRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     SubnetId?: string|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
