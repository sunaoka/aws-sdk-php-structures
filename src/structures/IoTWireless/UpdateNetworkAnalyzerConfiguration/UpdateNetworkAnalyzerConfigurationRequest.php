<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateNetworkAnalyzerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationName
 * @property Shapes\TraceContent|null $TraceContent
 * @property list<string>|null $WirelessDevicesToAdd
 * @property list<string>|null $WirelessDevicesToRemove
 * @property list<string>|null $WirelessGatewaysToAdd
 * @property list<string>|null $WirelessGatewaysToRemove
 * @property string|null $Description
 * @property list<string>|null $MulticastGroupsToAdd
 * @property list<string>|null $MulticastGroupsToRemove
 */
class UpdateNetworkAnalyzerConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationName: string,
     *     TraceContent?: Shapes\TraceContent|null,
     *     WirelessDevicesToAdd?: list<string>|null,
     *     WirelessDevicesToRemove?: list<string>|null,
     *     WirelessGatewaysToAdd?: list<string>|null,
     *     WirelessGatewaysToRemove?: list<string>|null,
     *     Description?: string|null,
     *     MulticastGroupsToAdd?: list<string>|null,
     *     MulticastGroupsToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
