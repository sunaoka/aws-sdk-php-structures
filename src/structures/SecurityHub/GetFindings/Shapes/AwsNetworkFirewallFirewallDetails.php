<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DeleteProtection
 * @property string|null $Description
 * @property string|null $FirewallArn
 * @property string|null $FirewallId
 * @property string|null $FirewallName
 * @property string|null $FirewallPolicyArn
 * @property bool|null $FirewallPolicyChangeProtection
 * @property bool|null $SubnetChangeProtection
 * @property list<AwsNetworkFirewallFirewallSubnetMappingsDetails>|null $SubnetMappings
 * @property string|null $VpcId
 */
class AwsNetworkFirewallFirewallDetails extends Shape
{
    /**
     * @param array{
     *     DeleteProtection?: bool|null,
     *     Description?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallId?: string|null,
     *     FirewallName?: string|null,
     *     FirewallPolicyArn?: string|null,
     *     FirewallPolicyChangeProtection?: bool|null,
     *     SubnetChangeProtection?: bool|null,
     *     SubnetMappings?: list<AwsNetworkFirewallFirewallSubnetMappingsDetails>|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
