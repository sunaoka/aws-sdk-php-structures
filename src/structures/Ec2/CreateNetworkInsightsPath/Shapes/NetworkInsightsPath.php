<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInsightsPathId
 * @property string|null $NetworkInsightsPathArn
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $Source
 * @property string|null $Destination
 * @property string|null $SourceArn
 * @property string|null $DestinationArn
 * @property string|null $SourceIp
 * @property string|null $DestinationIp
 * @property 'tcp'|'udp'|null $Protocol
 * @property int|null $DestinationPort
 * @property list<Tag>|null $Tags
 * @property PathFilter|null $FilterAtSource
 * @property PathFilter|null $FilterAtDestination
 */
class NetworkInsightsPath extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsPathId?: string|null,
     *     NetworkInsightsPathArn?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     Source?: string|null,
     *     Destination?: string|null,
     *     SourceArn?: string|null,
     *     DestinationArn?: string|null,
     *     SourceIp?: string|null,
     *     DestinationIp?: string|null,
     *     Protocol?: 'tcp'|'udp'|null,
     *     DestinationPort?: int|null,
     *     Tags?: list<Tag>|null,
     *     FilterAtSource?: PathFilter|null,
     *     FilterAtDestination?: PathFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
