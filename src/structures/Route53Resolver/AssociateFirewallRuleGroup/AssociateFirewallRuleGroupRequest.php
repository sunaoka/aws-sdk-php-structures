<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateFirewallRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $FirewallRuleGroupId
 * @property string $VpcId
 * @property int $Priority
 * @property string $Name
 * @property 'ENABLED'|'DISABLED' $MutationProtection
 * @property list<Shapes\Tag> $Tags
 */
class AssociateFirewallRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     FirewallRuleGroupId: string,
     *     VpcId: string,
     *     Priority: int,
     *     Name: string,
     *     MutationProtection?: 'ENABLED'|'DISABLED',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
