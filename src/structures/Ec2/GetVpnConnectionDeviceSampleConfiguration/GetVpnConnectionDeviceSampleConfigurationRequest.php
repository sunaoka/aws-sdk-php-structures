<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnConnectionDeviceSampleConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string $VpnConnectionDeviceTypeId
 * @property string|null $InternetKeyExchangeVersion
 * @property string|null $SampleType
 * @property bool|null $DryRun
 */
class GetVpnConnectionDeviceSampleConfigurationRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     VpnConnectionDeviceTypeId: string,
     *     InternetKeyExchangeVersion?: string|null,
     *     SampleType?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
