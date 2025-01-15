<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DestinationAddresses
 * @property list<PortRange>|null $DestinationPortRanges
 * @property string|null $Protocol
 * @property list<string>|null $SourceAddresses
 * @property list<PortRange>|null $SourcePortRanges
 */
class AnalysisPacketHeader extends Shape
{
    /**
     * @param array{
     *     DestinationAddresses?: list<string>|null,
     *     DestinationPortRanges?: list<PortRange>|null,
     *     Protocol?: string|null,
     *     SourceAddresses?: list<string>|null,
     *     SourcePortRanges?: list<PortRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
