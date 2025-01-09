<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsPaths\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInsightsPathId
 * @property string $NetworkInsightsPathArn
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Source
 * @property string $Destination
 * @property string $SourceArn
 * @property string $DestinationArn
 * @property string $SourceIp
 * @property string $DestinationIp
 * @property 'tcp'|'udp' $Protocol
 * @property int $DestinationPort
 * @property list<Tag> $Tags
 * @property PathFilter $FilterAtSource
 * @property PathFilter $FilterAtDestination
 */
class NetworkInsightsPath extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsPathId?: string,
     *     NetworkInsightsPathArn?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     Source?: string,
     *     Destination?: string,
     *     SourceArn?: string,
     *     DestinationArn?: string,
     *     SourceIp?: string,
     *     DestinationIp?: string,
     *     Protocol?: 'tcp'|'udp',
     *     DestinationPort?: int,
     *     Tags?: list<Tag>,
     *     FilterAtSource?: PathFilter,
     *     FilterAtDestination?: PathFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
