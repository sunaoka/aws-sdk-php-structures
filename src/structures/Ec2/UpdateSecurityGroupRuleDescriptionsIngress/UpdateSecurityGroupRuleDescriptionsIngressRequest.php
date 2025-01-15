<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $GroupId
 * @property string|null $GroupName
 * @property list<Shapes\IpPermission>|null $IpPermissions
 * @property list<Shapes\SecurityGroupRuleDescription>|null $SecurityGroupRuleDescriptions
 */
class UpdateSecurityGroupRuleDescriptionsIngressRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     GroupId?: string|null,
     *     GroupName?: string|null,
     *     IpPermissions?: list<Shapes\IpPermission>|null,
     *     SecurityGroupRuleDescriptions?: list<Shapes\SecurityGroupRuleDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
