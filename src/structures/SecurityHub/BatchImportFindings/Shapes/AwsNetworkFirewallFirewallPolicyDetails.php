<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FirewallPolicyDetails|null $FirewallPolicy
 * @property string|null $FirewallPolicyArn
 * @property string|null $FirewallPolicyId
 * @property string|null $FirewallPolicyName
 * @property string|null $Description
 */
class AwsNetworkFirewallFirewallPolicyDetails extends Shape
{
    /**
     * @param array{
     *     FirewallPolicy?: FirewallPolicyDetails|null,
     *     FirewallPolicyArn?: string|null,
     *     FirewallPolicyId?: string|null,
     *     FirewallPolicyName?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
