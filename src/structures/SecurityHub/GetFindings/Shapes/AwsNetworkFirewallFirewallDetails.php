<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DeleteProtection
 * @property string $Description
 * @property string $FirewallArn
 * @property string $FirewallId
 * @property string $FirewallName
 * @property string $FirewallPolicyArn
 * @property bool $FirewallPolicyChangeProtection
 * @property bool $SubnetChangeProtection
 * @property list<AwsNetworkFirewallFirewallSubnetMappingsDetails> $SubnetMappings
 * @property string $VpcId
 */
class AwsNetworkFirewallFirewallDetails extends Shape
{
    /**
     * @param array{
     *     DeleteProtection?: bool,
     *     Description?: string,
     *     FirewallArn?: string,
     *     FirewallId?: string,
     *     FirewallName?: string,
     *     FirewallPolicyArn?: string,
     *     FirewallPolicyChangeProtection?: bool,
     *     SubnetChangeProtection?: bool,
     *     SubnetMappings?: list<AwsNetworkFirewallFirewallSubnetMappingsDetails>,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
