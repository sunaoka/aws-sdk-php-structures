<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupEgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $GroupId
 * @property list<Shapes\IpPermission>|null $IpPermissions
 * @property list<string>|null $SecurityGroupRuleIds
 * @property string|null $CidrIp
 * @property int|null $FromPort
 * @property string|null $IpProtocol
 * @property int|null $ToPort
 * @property string|null $SourceSecurityGroupName
 * @property string|null $SourceSecurityGroupOwnerId
 */
class RevokeSecurityGroupEgressRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     GroupId: string,
     *     IpPermissions?: list<Shapes\IpPermission>|null,
     *     SecurityGroupRuleIds?: list<string>|null,
     *     CidrIp?: string|null,
     *     FromPort?: int|null,
     *     IpProtocol?: string|null,
     *     ToPort?: int|null,
     *     SourceSecurityGroupName?: string|null,
     *     SourceSecurityGroupOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
