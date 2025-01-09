<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DestinationAddresses
 * @property list<PortRange> $DestinationPortRanges
 * @property string $Protocol
 * @property list<string> $SourceAddresses
 * @property list<PortRange> $SourcePortRanges
 */
class AnalysisPacketHeader extends Shape
{
    /**
     * @param array{
     *     DestinationAddresses?: list<string>,
     *     DestinationPortRanges?: list<PortRange>,
     *     Protocol?: string,
     *     SourceAddresses?: list<string>,
     *     SourcePortRanges?: list<PortRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
