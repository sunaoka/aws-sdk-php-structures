<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupEgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $SecurityGroupRuleIds
 * @property bool|null $DryRun
 * @property string $GroupId
 * @property string|null $SourceSecurityGroupName
 * @property string|null $SourceSecurityGroupOwnerId
 * @property string|null $IpProtocol
 * @property int|null $FromPort
 * @property int|null $ToPort
 * @property string|null $CidrIp
 * @property list<Shapes\IpPermission>|null $IpPermissions
 */
class RevokeSecurityGroupEgressRequest extends Request
{
    /**
     * @param array{
     *     SecurityGroupRuleIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     GroupId: string,
     *     SourceSecurityGroupName?: string|null,
     *     SourceSecurityGroupOwnerId?: string|null,
     *     IpProtocol?: string|null,
     *     FromPort?: int|null,
     *     ToPort?: int|null,
     *     CidrIp?: string|null,
     *     IpPermissions?: list<Shapes\IpPermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
