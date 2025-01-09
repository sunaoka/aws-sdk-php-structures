<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceIp
 * @property string $DestinationIp
 * @property string $Source
 * @property string $Destination
 * @property 'tcp'|'udp' $Protocol
 * @property int<0, 65535> $DestinationPort
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $ClientToken
 * @property Shapes\PathRequestFilter $FilterAtSource
 * @property Shapes\PathRequestFilter $FilterAtDestination
 */
class CreateNetworkInsightsPathRequest extends Request
{
    /**
     * @param array{
     *     SourceIp?: string,
     *     DestinationIp?: string,
     *     Source: string,
     *     Destination?: string,
     *     Protocol: 'tcp'|'udp',
     *     DestinationPort?: int<0, 65535>,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     ClientToken: string,
     *     FilterAtSource?: Shapes\PathRequestFilter,
     *     FilterAtDestination?: Shapes\PathRequestFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
