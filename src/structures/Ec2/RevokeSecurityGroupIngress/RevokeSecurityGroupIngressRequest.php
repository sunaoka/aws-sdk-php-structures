<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CidrIp
 * @property int|null $FromPort
 * @property string|null $GroupId
 * @property string|null $GroupName
 * @property list<Shapes\IpPermission>|null $IpPermissions
 * @property string|null $IpProtocol
 * @property string|null $SourceSecurityGroupName
 * @property string|null $SourceSecurityGroupOwnerId
 * @property int|null $ToPort
 * @property list<string>|null $SecurityGroupRuleIds
 * @property bool|null $DryRun
 */
class RevokeSecurityGroupIngressRequest extends Request
{
    /**
     * @param array{
     *     CidrIp?: string|null,
     *     FromPort?: int|null,
     *     GroupId?: string|null,
     *     GroupName?: string|null,
     *     IpPermissions?: list<Shapes\IpPermission>|null,
     *     IpProtocol?: string|null,
     *     SourceSecurityGroupName?: string|null,
     *     SourceSecurityGroupOwnerId?: string|null,
     *     ToPort?: int|null,
     *     SecurityGroupRuleIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
