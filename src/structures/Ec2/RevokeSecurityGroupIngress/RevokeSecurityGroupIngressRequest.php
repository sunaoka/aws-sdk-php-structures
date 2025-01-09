<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CidrIp
 * @property int $FromPort
 * @property string $GroupId
 * @property string $GroupName
 * @property list<Shapes\IpPermission> $IpPermissions
 * @property string $IpProtocol
 * @property string $SourceSecurityGroupName
 * @property string $SourceSecurityGroupOwnerId
 * @property int $ToPort
 * @property list<string> $SecurityGroupRuleIds
 * @property bool $DryRun
 */
class RevokeSecurityGroupIngressRequest extends Request
{
    /**
     * @param array{
     *     CidrIp?: string,
     *     FromPort?: int,
     *     GroupId?: string,
     *     GroupName?: string,
     *     IpPermissions?: list<Shapes\IpPermission>,
     *     IpProtocol?: string,
     *     SourceSecurityGroupName?: string,
     *     SourceSecurityGroupOwnerId?: string,
     *     ToPort?: int,
     *     SecurityGroupRuleIds?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
