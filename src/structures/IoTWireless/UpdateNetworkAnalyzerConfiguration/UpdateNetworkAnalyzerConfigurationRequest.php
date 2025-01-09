<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateNetworkAnalyzerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationName
 * @property Shapes\TraceContent $TraceContent
 * @property list<string> $WirelessDevicesToAdd
 * @property list<string> $WirelessDevicesToRemove
 * @property list<string> $WirelessGatewaysToAdd
 * @property list<string> $WirelessGatewaysToRemove
 * @property string $Description
 * @property list<string> $MulticastGroupsToAdd
 * @property list<string> $MulticastGroupsToRemove
 */
class UpdateNetworkAnalyzerConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationName: string,
     *     TraceContent?: Shapes\TraceContent,
     *     WirelessDevicesToAdd?: list<string>,
     *     WirelessDevicesToRemove?: list<string>,
     *     WirelessGatewaysToAdd?: list<string>,
     *     WirelessGatewaysToRemove?: list<string>,
     *     Description?: string,
     *     MulticastGroupsToAdd?: list<string>,
     *     MulticastGroupsToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
