<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleGroupArn
 * @property list<string>|null $Sources
 * @property list<string>|null $Destinations
 * @property list<PortRange>|null $SourcePorts
 * @property list<PortRange>|null $DestinationPorts
 * @property list<int<0, 255>>|null $Protocols
 * @property string|null $RuleAction
 * @property int<-1, 65535>|null $Priority
 */
class FirewallStatelessRule extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn?: string|null,
     *     Sources?: list<string>|null,
     *     Destinations?: list<string>|null,
     *     SourcePorts?: list<PortRange>|null,
     *     DestinationPorts?: list<PortRange>|null,
     *     Protocols?: list<int<0, 255>>|null,
     *     RuleAction?: string|null,
     *     Priority?: int<-1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
