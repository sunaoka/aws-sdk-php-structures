<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnConnectionDeviceSampleConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string $VpnConnectionDeviceTypeId
 * @property string $InternetKeyExchangeVersion
 * @property bool $DryRun
 */
class GetVpnConnectionDeviceSampleConfigurationRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     VpnConnectionDeviceTypeId: string,
     *     InternetKeyExchangeVersion?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
