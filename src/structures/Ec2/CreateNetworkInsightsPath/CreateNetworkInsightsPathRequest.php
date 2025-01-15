<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceIp
 * @property string|null $DestinationIp
 * @property string $Source
 * @property string|null $Destination
 * @property 'tcp'|'udp' $Protocol
 * @property int<0, 65535>|null $DestinationPort
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string $ClientToken
 * @property Shapes\PathRequestFilter|null $FilterAtSource
 * @property Shapes\PathRequestFilter|null $FilterAtDestination
 */
class CreateNetworkInsightsPathRequest extends Request
{
    /**
     * @param array{
     *     SourceIp?: string|null,
     *     DestinationIp?: string|null,
     *     Source: string,
     *     Destination?: string|null,
     *     Protocol: 'tcp'|'udp',
     *     DestinationPort?: int<0, 65535>|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     ClientToken: string,
     *     FilterAtSource?: Shapes\PathRequestFilter|null,
     *     FilterAtDestination?: Shapes\PathRequestFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
