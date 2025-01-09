<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $GroupId
 * @property string $GroupName
 * @property list<Shapes\IpPermission> $IpPermissions
 * @property list<Shapes\SecurityGroupRuleDescription> $SecurityGroupRuleDescriptions
 */
class UpdateSecurityGroupRuleDescriptionsIngressRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     GroupId?: string,
     *     GroupName?: string,
     *     IpPermissions?: list<Shapes\IpPermission>,
     *     SecurityGroupRuleDescriptions?: list<Shapes\SecurityGroupRuleDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
