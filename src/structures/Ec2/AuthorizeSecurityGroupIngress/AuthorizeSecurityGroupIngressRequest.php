<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupIngress;

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
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class AuthorizeSecurityGroupIngressRequest extends Request
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
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
