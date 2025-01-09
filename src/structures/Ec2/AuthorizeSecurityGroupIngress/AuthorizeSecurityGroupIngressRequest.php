<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupIngress;

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
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class AuthorizeSecurityGroupIngressRequest extends Request
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
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
