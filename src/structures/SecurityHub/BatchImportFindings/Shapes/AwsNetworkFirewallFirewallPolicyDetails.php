<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FirewallPolicyDetails $FirewallPolicy
 * @property string $FirewallPolicyArn
 * @property string $FirewallPolicyId
 * @property string $FirewallPolicyName
 * @property string $Description
 */
class AwsNetworkFirewallFirewallPolicyDetails extends Shape
{
    /**
     * @param array{
     *     FirewallPolicy?: FirewallPolicyDetails,
     *     FirewallPolicyArn?: string,
     *     FirewallPolicyId?: string,
     *     FirewallPolicyName?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
