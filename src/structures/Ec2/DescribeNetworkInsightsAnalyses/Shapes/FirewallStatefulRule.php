<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupArn
 * @property list<string> $Sources
 * @property list<string> $Destinations
 * @property list<PortRange> $SourcePorts
 * @property list<PortRange> $DestinationPorts
 * @property string $Protocol
 * @property string $RuleAction
 * @property string $Direction
 */
class FirewallStatefulRule extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn?: string,
     *     Sources?: list<string>,
     *     Destinations?: list<string>,
     *     SourcePorts?: list<PortRange>,
     *     DestinationPorts?: list<PortRange>,
     *     Protocol?: string,
     *     RuleAction?: string,
     *     Direction?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
