<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AgentVersion
 * @property string|null $AmiId
 * @property 'x86_64'|'i386'|null $Architecture
 * @property string|null $Arn
 * @property 'load'|'timer'|null $AutoScalingType
 * @property string|null $AvailabilityZone
 * @property list<BlockDeviceMapping>|null $BlockDeviceMappings
 * @property string|null $CreatedAt
 * @property bool|null $EbsOptimized
 * @property string|null $Ec2InstanceId
 * @property string|null $EcsClusterArn
 * @property string|null $EcsContainerInstanceArn
 * @property string|null $ElasticIp
 * @property string|null $Hostname
 * @property string|null $InfrastructureClass
 * @property bool|null $InstallUpdatesOnBoot
 * @property string|null $InstanceId
 * @property string|null $InstanceProfileArn
 * @property string|null $InstanceType
 * @property string|null $LastServiceErrorId
 * @property list<string>|null $LayerIds
 * @property string|null $Os
 * @property string|null $Platform
 * @property string|null $PrivateDns
 * @property string|null $PrivateIp
 * @property string|null $PublicDns
 * @property string|null $PublicIp
 * @property string|null $RegisteredBy
 * @property string|null $ReportedAgentVersion
 * @property ReportedOs|null $ReportedOs
 * @property 'ebs'|'instance-store'|null $RootDeviceType
 * @property string|null $RootDeviceVolumeId
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $SshHostDsaKeyFingerprint
 * @property string|null $SshHostRsaKeyFingerprint
 * @property string|null $SshKeyName
 * @property string|null $StackId
 * @property string|null $Status
 * @property string|null $SubnetId
 * @property string|null $Tenancy
 * @property 'paravirtual'|'hvm'|null $VirtualizationType
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     AgentVersion?: string|null,
     *     AmiId?: string|null,
     *     Architecture?: 'x86_64'|'i386'|null,
     *     Arn?: string|null,
     *     AutoScalingType?: 'load'|'timer'|null,
     *     AvailabilityZone?: string|null,
     *     BlockDeviceMappings?: list<BlockDeviceMapping>|null,
     *     CreatedAt?: string|null,
     *     EbsOptimized?: bool|null,
     *     Ec2InstanceId?: string|null,
     *     EcsClusterArn?: string|null,
     *     EcsContainerInstanceArn?: string|null,
     *     ElasticIp?: string|null,
     *     Hostname?: string|null,
     *     InfrastructureClass?: string|null,
     *     InstallUpdatesOnBoot?: bool|null,
     *     InstanceId?: string|null,
     *     InstanceProfileArn?: string|null,
     *     InstanceType?: string|null,
     *     LastServiceErrorId?: string|null,
     *     LayerIds?: list<string>|null,
     *     Os?: string|null,
     *     Platform?: string|null,
     *     PrivateDns?: string|null,
     *     PrivateIp?: string|null,
     *     PublicDns?: string|null,
     *     PublicIp?: string|null,
     *     RegisteredBy?: string|null,
     *     ReportedAgentVersion?: string|null,
     *     ReportedOs?: ReportedOs|null,
     *     RootDeviceType?: 'ebs'|'instance-store'|null,
     *     RootDeviceVolumeId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SshHostDsaKeyFingerprint?: string|null,
     *     SshHostRsaKeyFingerprint?: string|null,
     *     SshKeyName?: string|null,
     *     StackId?: string|null,
     *     Status?: string|null,
     *     SubnetId?: string|null,
     *     Tenancy?: string|null,
     *     VirtualizationType?: 'paravirtual'|'hvm'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
