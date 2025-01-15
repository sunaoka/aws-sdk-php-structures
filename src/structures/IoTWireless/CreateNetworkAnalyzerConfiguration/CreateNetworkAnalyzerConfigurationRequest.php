<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateNetworkAnalyzerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\TraceContent|null $TraceContent
 * @property list<string>|null $WirelessDevices
 * @property list<string>|null $WirelessGateways
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientRequestToken
 * @property list<string>|null $MulticastGroups
 */
class CreateNetworkAnalyzerConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TraceContent?: Shapes\TraceContent|null,
     *     WirelessDevices?: list<string>|null,
     *     WirelessGateways?: list<string>|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientRequestToken?: string|null,
     *     MulticastGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
