<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleGroupArn
 * @property list<string>|null $Sources
 * @property list<string>|null $Destinations
 * @property list<PortRange>|null $SourcePorts
 * @property list<PortRange>|null $DestinationPorts
 * @property string|null $Protocol
 * @property string|null $RuleAction
 * @property string|null $Direction
 */
class FirewallStatefulRule extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn?: string|null,
     *     Sources?: list<string>|null,
     *     Destinations?: list<string>|null,
     *     SourcePorts?: list<PortRange>|null,
     *     DestinationPorts?: list<PortRange>|null,
     *     Protocol?: string|null,
     *     RuleAction?: string|null,
     *     Direction?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
