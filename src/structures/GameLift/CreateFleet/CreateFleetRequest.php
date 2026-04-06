<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $BuildId
 * @property string|null $ScriptId
 * @property string|null $ServerLaunchPath
 * @property string|null $ServerLaunchParameters
 * @property list<string>|null $LogPaths
 * @property 't2.micro'|'t2.small'|'t2.medium'|'t2.large'|'c3.large'|'c3.xlarge'|'c3.2xlarge'|'c3.4xlarge'|'c3.8xlarge'|'c4.large'|'c4.xlarge'|'c4.2xlarge'|'c4.4xlarge'|'c4.8xlarge'|'c5.large'|'c5.xlarge'|'c5.2xlarge'|'c5.4xlarge'|'c5.9xlarge'|'c5.12xlarge'|'c5.18xlarge'|'c5.24xlarge'|'c5a.large'|'c5a.xlarge'|'c5a.2xlarge'|'c5a.4xlarge'|'c5a.8xlarge'|'c5a.12xlarge'|'c5a.16xlarge'|'c5a.24xlarge'|'r3.large'|'r3.xlarge'|'r3.2xlarge'|'r3.4xlarge'|'r3.8xlarge'|'r4.large'|'r4.xlarge'|'r4.2xlarge'|'r4.4xlarge'|'r4.8xlarge'|'r4.16xlarge'|'r5.large'|'r5.xlarge'|'r5.2xlarge'|'r5.4xlarge'|'r5.8xlarge'|'r5.12xlarge'|'r5.16xlarge'|'r5.24xlarge'|'r5a.large'|'r5a.xlarge'|'r5a.2xlarge'|'r5a.4xlarge'|'r5a.8xlarge'|'r5a.12xlarge'|'r5a.16xlarge'|'r5a.24xlarge'|'m3.medium'|'m3.large'|'m3.xlarge'|'m3.2xlarge'|'m4.large'|'m4.xlarge'|'m4.2xlarge'|'m4.4xlarge'|'m4.10xlarge'|'m5.large'|'m5.xlarge'|'m5.2xlarge'|'m5.4xlarge'|'m5.8xlarge'|'m5.12xlarge'|'m5.16xlarge'|'m5.24xlarge'|'m5a.large'|'m5a.xlarge'|'m5a.2xlarge'|'m5a.4xlarge'|'m5a.8xlarge'|'m5a.12xlarge'|'m5a.16xlarge'|'m5a.24xlarge'|'c5d.large'|'c5d.xlarge'|'c5d.2xlarge'|'c5d.4xlarge'|'c5d.9xlarge'|'c5d.12xlarge'|'c5d.18xlarge'|'c5d.24xlarge'|'c6a.large'|'c6a.xlarge'|'c6a.2xlarge'|'c6a.4xlarge'|'c6a.8xlarge'|'c6a.12xlarge'|'c6a.16xlarge'|'c6a.24xlarge'|'c6i.large'|'c6i.xlarge'|'c6i.2xlarge'|'c6i.4xlarge'|'c6i.8xlarge'|'c6i.12xlarge'|'c6i.16xlarge'|'c6i.24xlarge'|'r5d.large'|'r5d.xlarge'|'r5d.2xlarge'|'r5d.4xlarge'|'r5d.8xlarge'|'r5d.12xlarge'|'r5d.16xlarge'|'r5d.24xlarge'|'m6g.medium'|'m6g.large'|'m6g.xlarge'|'m6g.2xlarge'|'m6g.4xlarge'|'m6g.8xlarge'|'m6g.12xlarge'|'m6g.16xlarge'|'c6g.medium'|'c6g.large'|'c6g.xlarge'|'c6g.2xlarge'|'c6g.4xlarge'|'c6g.8xlarge'|'c6g.12xlarge'|'c6g.16xlarge'|'r6g.medium'|'r6g.large'|'r6g.xlarge'|'r6g.2xlarge'|'r6g.4xlarge'|'r6g.8xlarge'|'r6g.12xlarge'|'r6g.16xlarge'|'c6gn.medium'|'c6gn.large'|'c6gn.xlarge'|'c6gn.2xlarge'|'c6gn.4xlarge'|'c6gn.8xlarge'|'c6gn.12xlarge'|'c6gn.16xlarge'|'c7g.medium'|'c7g.large'|'c7g.xlarge'|'c7g.2xlarge'|'c7g.4xlarge'|'c7g.8xlarge'|'c7g.12xlarge'|'c7g.16xlarge'|'r7g.medium'|'r7g.large'|'r7g.xlarge'|'r7g.2xlarge'|'r7g.4xlarge'|'r7g.8xlarge'|'r7g.12xlarge'|'r7g.16xlarge'|'m7g.medium'|'m7g.large'|'m7g.xlarge'|'m7g.2xlarge'|'m7g.4xlarge'|'m7g.8xlarge'|'m7g.12xlarge'|'m7g.16xlarge'|'g5g.xlarge'|'g5g.2xlarge'|'g5g.4xlarge'|'g5g.8xlarge'|'g5g.16xlarge'|null $EC2InstanceType
 * @property list<Shapes\IpPermission>|null $EC2InboundPermissions
 * @property 'NoProtection'|'FullProtection'|null $NewGameSessionProtectionPolicy
 * @property Shapes\RuntimeConfiguration|null $RuntimeConfiguration
 * @property Shapes\ResourceCreationLimitPolicy|null $ResourceCreationLimitPolicy
 * @property list<string>|null $MetricGroups
 * @property string|null $PeerVpcAwsAccountId
 * @property string|null $PeerVpcId
 * @property 'ON_DEMAND'|'SPOT'|null $FleetType
 * @property string|null $InstanceRoleArn
 * @property Shapes\CertificateConfiguration|null $CertificateConfiguration
 * @property list<Shapes\LocationConfiguration>|null $Locations
 * @property list<Shapes\Tag>|null $Tags
 * @property 'EC2'|'ANYWHERE'|null $ComputeType
 * @property Shapes\AnywhereConfiguration|null $AnywhereConfiguration
 * @property 'SHARED_CREDENTIAL_FILE'|null $InstanceRoleCredentialsProvider
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     BuildId?: string|null,
     *     ScriptId?: string|null,
     *     ServerLaunchPath?: string|null,
     *     ServerLaunchParameters?: string|null,
     *     LogPaths?: list<string>|null,
     *     EC2InstanceType?: 't2.micro'|'t2.small'|'t2.medium'|'t2.large'|'c3.large'|'c3.xlarge'|'c3.2xlarge'|'c3.4xlarge'|'c3.8xlarge'|'c4.large'|'c4.xlarge'|'c4.2xlarge'|'c4.4xlarge'|'c4.8xlarge'|'c5.large'|'c5.xlarge'|'c5.2xlarge'|'c5.4xlarge'|'c5.9xlarge'|'c5.12xlarge'|'c5.18xlarge'|'c5.24xlarge'|'c5a.large'|'c5a.xlarge'|'c5a.2xlarge'|'c5a.4xlarge'|'c5a.8xlarge'|'c5a.12xlarge'|'c5a.16xlarge'|'c5a.24xlarge'|'r3.large'|'r3.xlarge'|'r3.2xlarge'|'r3.4xlarge'|'r3.8xlarge'|'r4.large'|'r4.xlarge'|'r4.2xlarge'|'r4.4xlarge'|'r4.8xlarge'|'r4.16xlarge'|'r5.large'|'r5.xlarge'|'r5.2xlarge'|'r5.4xlarge'|'r5.8xlarge'|'r5.12xlarge'|'r5.16xlarge'|'r5.24xlarge'|'r5a.large'|'r5a.xlarge'|'r5a.2xlarge'|'r5a.4xlarge'|'r5a.8xlarge'|'r5a.12xlarge'|'r5a.16xlarge'|'r5a.24xlarge'|'m3.medium'|'m3.large'|'m3.xlarge'|'m3.2xlarge'|'m4.large'|'m4.xlarge'|'m4.2xlarge'|'m4.4xlarge'|'m4.10xlarge'|'m5.large'|'m5.xlarge'|'m5.2xlarge'|'m5.4xlarge'|'m5.8xlarge'|'m5.12xlarge'|'m5.16xlarge'|'m5.24xlarge'|'m5a.large'|'m5a.xlarge'|'m5a.2xlarge'|'m5a.4xlarge'|'m5a.8xlarge'|'m5a.12xlarge'|'m5a.16xlarge'|'m5a.24xlarge'|'c5d.large'|'c5d.xlarge'|'c5d.2xlarge'|'c5d.4xlarge'|'c5d.9xlarge'|'c5d.12xlarge'|'c5d.18xlarge'|'c5d.24xlarge'|'c6a.large'|'c6a.xlarge'|'c6a.2xlarge'|'c6a.4xlarge'|'c6a.8xlarge'|'c6a.12xlarge'|'c6a.16xlarge'|'c6a.24xlarge'|'c6i.large'|'c6i.xlarge'|'c6i.2xlarge'|'c6i.4xlarge'|'c6i.8xlarge'|'c6i.12xlarge'|'c6i.16xlarge'|'c6i.24xlarge'|'r5d.large'|'r5d.xlarge'|'r5d.2xlarge'|'r5d.4xlarge'|'r5d.8xlarge'|'r5d.12xlarge'|'r5d.16xlarge'|'r5d.24xlarge'|'m6g.medium'|'m6g.large'|'m6g.xlarge'|'m6g.2xlarge'|'m6g.4xlarge'|'m6g.8xlarge'|'m6g.12xlarge'|'m6g.16xlarge'|'c6g.medium'|'c6g.large'|'c6g.xlarge'|'c6g.2xlarge'|'c6g.4xlarge'|'c6g.8xlarge'|'c6g.12xlarge'|'c6g.16xlarge'|'r6g.medium'|'r6g.large'|'r6g.xlarge'|'r6g.2xlarge'|'r6g.4xlarge'|'r6g.8xlarge'|'r6g.12xlarge'|'r6g.16xlarge'|'c6gn.medium'|'c6gn.large'|'c6gn.xlarge'|'c6gn.2xlarge'|'c6gn.4xlarge'|'c6gn.8xlarge'|'c6gn.12xlarge'|'c6gn.16xlarge'|'c7g.medium'|'c7g.large'|'c7g.xlarge'|'c7g.2xlarge'|'c7g.4xlarge'|'c7g.8xlarge'|'c7g.12xlarge'|'c7g.16xlarge'|'r7g.medium'|'r7g.large'|'r7g.xlarge'|'r7g.2xlarge'|'r7g.4xlarge'|'r7g.8xlarge'|'r7g.12xlarge'|'r7g.16xlarge'|'m7g.medium'|'m7g.large'|'m7g.xlarge'|'m7g.2xlarge'|'m7g.4xlarge'|'m7g.8xlarge'|'m7g.12xlarge'|'m7g.16xlarge'|'g5g.xlarge'|'g5g.2xlarge'|'g5g.4xlarge'|'g5g.8xlarge'|'g5g.16xlarge'|null,
     *     EC2InboundPermissions?: list<Shapes\IpPermission>|null,
     *     NewGameSessionProtectionPolicy?: 'NoProtection'|'FullProtection'|null,
     *     RuntimeConfiguration?: Shapes\RuntimeConfiguration|null,
     *     ResourceCreationLimitPolicy?: Shapes\ResourceCreationLimitPolicy|null,
     *     MetricGroups?: list<string>|null,
     *     PeerVpcAwsAccountId?: string|null,
     *     PeerVpcId?: string|null,
     *     FleetType?: 'ON_DEMAND'|'SPOT'|null,
     *     InstanceRoleArn?: string|null,
     *     CertificateConfiguration?: Shapes\CertificateConfiguration|null,
     *     Locations?: list<Shapes\LocationConfiguration>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ComputeType?: 'EC2'|'ANYWHERE'|null,
     *     AnywhereConfiguration?: Shapes\AnywhereConfiguration|null,
     *     InstanceRoleCredentialsProvider?: 'SHARED_CREDENTIAL_FILE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
