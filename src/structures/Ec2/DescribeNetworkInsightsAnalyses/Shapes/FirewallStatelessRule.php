<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupArn
 * @property list<string> $Sources
 * @property list<string> $Destinations
 * @property list<PortRange> $SourcePorts
 * @property list<PortRange> $DestinationPorts
 * @property list<int<0, 255>> $Protocols
 * @property string $RuleAction
 * @property int<-1, 65535> $Priority
 */
class FirewallStatelessRule extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn?: string,
     *     Sources?: list<string>,
     *     Destinations?: list<string>,
     *     SourcePorts?: list<PortRange>,
     *     DestinationPorts?: list<PortRange>,
     *     Protocols?: list<int<0, 255>>,
     *     RuleAction?: string,
     *     Priority?: int<-1, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
