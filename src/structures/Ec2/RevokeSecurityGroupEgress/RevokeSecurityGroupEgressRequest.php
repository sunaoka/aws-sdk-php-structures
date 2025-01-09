<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupEgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SecurityGroupRuleIds
 * @property bool $DryRun
 * @property string $GroupId
 * @property string $SourceSecurityGroupName
 * @property string $SourceSecurityGroupOwnerId
 * @property string $IpProtocol
 * @property int $FromPort
 * @property int $ToPort
 * @property string $CidrIp
 * @property list<Shapes\IpPermission> $IpPermissions
 */
class RevokeSecurityGroupEgressRequest extends Request
{
    /**
     * @param array{
     *     SecurityGroupRuleIds?: list<string>,
     *     DryRun?: bool,
     *     GroupId: string,
     *     SourceSecurityGroupName?: string,
     *     SourceSecurityGroupOwnerId?: string,
     *     IpProtocol?: string,
     *     FromPort?: int,
     *     ToPort?: int,
     *     CidrIp?: string,
     *     IpPermissions?: list<Shapes\IpPermission>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
