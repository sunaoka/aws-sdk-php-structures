<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AgentVersion
 * @property string $AmiId
 * @property 'x86_64'|'i386' $Architecture
 * @property string $Arn
 * @property 'load'|'timer' $AutoScalingType
 * @property string $AvailabilityZone
 * @property list<BlockDeviceMapping> $BlockDeviceMappings
 * @property string $CreatedAt
 * @property bool $EbsOptimized
 * @property string $Ec2InstanceId
 * @property string $EcsClusterArn
 * @property string $EcsContainerInstanceArn
 * @property string $ElasticIp
 * @property string $Hostname
 * @property string $InfrastructureClass
 * @property bool $InstallUpdatesOnBoot
 * @property string $InstanceId
 * @property string $InstanceProfileArn
 * @property string $InstanceType
 * @property string $LastServiceErrorId
 * @property list<string> $LayerIds
 * @property string $Os
 * @property string $Platform
 * @property string $PrivateDns
 * @property string $PrivateIp
 * @property string $PublicDns
 * @property string $PublicIp
 * @property string $RegisteredBy
 * @property string $ReportedAgentVersion
 * @property ReportedOs $ReportedOs
 * @property 'ebs'|'instance-store' $RootDeviceType
 * @property string $RootDeviceVolumeId
 * @property list<string> $SecurityGroupIds
 * @property string $SshHostDsaKeyFingerprint
 * @property string $SshHostRsaKeyFingerprint
 * @property string $SshKeyName
 * @property string $StackId
 * @property string $Status
 * @property string $SubnetId
 * @property string $Tenancy
 * @property 'paravirtual'|'hvm' $VirtualizationType
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     AgentVersion?: string,
     *     AmiId?: string,
     *     Architecture?: 'x86_64'|'i386',
     *     Arn?: string,
     *     AutoScalingType?: 'load'|'timer',
     *     AvailabilityZone?: string,
     *     BlockDeviceMappings?: list<BlockDeviceMapping>,
     *     CreatedAt?: string,
     *     EbsOptimized?: bool,
     *     Ec2InstanceId?: string,
     *     EcsClusterArn?: string,
     *     EcsContainerInstanceArn?: string,
     *     ElasticIp?: string,
     *     Hostname?: string,
     *     InfrastructureClass?: string,
     *     InstallUpdatesOnBoot?: bool,
     *     InstanceId?: string,
     *     InstanceProfileArn?: string,
     *     InstanceType?: string,
     *     LastServiceErrorId?: string,
     *     LayerIds?: list<string>,
     *     Os?: string,
     *     Platform?: string,
     *     PrivateDns?: string,
     *     PrivateIp?: string,
     *     PublicDns?: string,
     *     PublicIp?: string,
     *     RegisteredBy?: string,
     *     ReportedAgentVersion?: string,
     *     ReportedOs?: ReportedOs,
     *     RootDeviceType?: 'ebs'|'instance-store',
     *     RootDeviceVolumeId?: string,
     *     SecurityGroupIds?: list<string>,
     *     SshHostDsaKeyFingerprint?: string,
     *     SshHostRsaKeyFingerprint?: string,
     *     SshKeyName?: string,
     *     StackId?: string,
     *     Status?: string,
     *     SubnetId?: string,
     *     Tenancy?: string,
     *     VirtualizationType?: 'paravirtual'|'hvm'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
