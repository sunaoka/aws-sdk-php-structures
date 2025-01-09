<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateNetworkAnalyzerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\TraceContent $TraceContent
 * @property list<string> $WirelessDevices
 * @property list<string> $WirelessGateways
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientRequestToken
 * @property list<string> $MulticastGroups
 */
class CreateNetworkAnalyzerConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TraceContent?: Shapes\TraceContent,
     *     WirelessDevices?: list<string>,
     *     WirelessGateways?: list<string>,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientRequestToken?: string,
     *     MulticastGroups?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
