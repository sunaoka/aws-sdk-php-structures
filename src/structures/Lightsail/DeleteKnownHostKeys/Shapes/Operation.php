<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteKnownHostKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $resourceName
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property bool $isTerminal
 * @property string $operationDetails
 * @property 'DeleteKnownHostKeys'|'DeleteInstance'|'CreateInstance'|'StopInstance'|'StartInstance'|'RebootInstance'|'OpenInstancePublicPorts'|'PutInstancePublicPorts'|'CloseInstancePublicPorts'|'AllocateStaticIp'|'ReleaseStaticIp'|'AttachStaticIp'|'DetachStaticIp'|'UpdateDomainEntry'|'DeleteDomainEntry'|'CreateDomain'|'DeleteDomain'|'CreateInstanceSnapshot'|'DeleteInstanceSnapshot'|'CreateInstancesFromSnapshot'|'CreateLoadBalancer'|'DeleteLoadBalancer'|'AttachInstancesToLoadBalancer'|'DetachInstancesFromLoadBalancer'|'UpdateLoadBalancerAttribute'|'CreateLoadBalancerTlsCertificate'|'DeleteLoadBalancerTlsCertificate'|'AttachLoadBalancerTlsCertificate'|'CreateDisk'|'DeleteDisk'|'AttachDisk'|'DetachDisk'|'CreateDiskSnapshot'|'DeleteDiskSnapshot'|'CreateDiskFromSnapshot'|'CreateRelationalDatabase'|'UpdateRelationalDatabase'|'DeleteRelationalDatabase'|'CreateRelationalDatabaseFromSnapshot'|'CreateRelationalDatabaseSnapshot'|'DeleteRelationalDatabaseSnapshot'|'UpdateRelationalDatabaseParameters'|'StartRelationalDatabase'|'RebootRelationalDatabase'|'StopRelationalDatabase'|'EnableAddOn'|'DisableAddOn'|'PutAlarm'|'GetAlarms'|'DeleteAlarm'|'TestAlarm'|'CreateContactMethod'|'GetContactMethods'|'SendContactMethodVerification'|'DeleteContactMethod'|'CreateDistribution'|'UpdateDistribution'|'DeleteDistribution'|'ResetDistributionCache'|'AttachCertificateToDistribution'|'DetachCertificateFromDistribution'|'UpdateDistributionBundle'|'SetIpAddressType'|'CreateCertificate'|'DeleteCertificate'|'CreateContainerService'|'UpdateContainerService'|'DeleteContainerService'|'CreateContainerServiceDeployment'|'CreateContainerServiceRegistryLogin'|'RegisterContainerImage'|'DeleteContainerImage'|'CreateBucket'|'DeleteBucket'|'CreateBucketAccessKey'|'DeleteBucketAccessKey'|'UpdateBucketBundle'|'UpdateBucket'|'SetResourceAccessForBucket'|'UpdateInstanceMetadataOptions'|'StartGUISession'|'StopGUISession'|'SetupInstanceHttps' $operationType
 * @property 'NotStarted'|'Started'|'Failed'|'Completed'|'Succeeded' $status
 * @property \Aws\Api\DateTimeResult $statusChangedAt
 * @property string $errorCode
 * @property string $errorDetails
 */
class Operation extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     resourceName?: string,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     location?: ResourceLocation,
     *     isTerminal?: bool,
     *     operationDetails?: string,
     *     operationType?: 'DeleteKnownHostKeys'|'DeleteInstance'|'CreateInstance'|'StopInstance'|'StartInstance'|'RebootInstance'|'OpenInstancePublicPorts'|'PutInstancePublicPorts'|'CloseInstancePublicPorts'|'AllocateStaticIp'|'ReleaseStaticIp'|'AttachStaticIp'|'DetachStaticIp'|'UpdateDomainEntry'|'DeleteDomainEntry'|'CreateDomain'|'DeleteDomain'|'CreateInstanceSnapshot'|'DeleteInstanceSnapshot'|'CreateInstancesFromSnapshot'|'CreateLoadBalancer'|'DeleteLoadBalancer'|'AttachInstancesToLoadBalancer'|'DetachInstancesFromLoadBalancer'|'UpdateLoadBalancerAttribute'|'CreateLoadBalancerTlsCertificate'|'DeleteLoadBalancerTlsCertificate'|'AttachLoadBalancerTlsCertificate'|'CreateDisk'|'DeleteDisk'|'AttachDisk'|'DetachDisk'|'CreateDiskSnapshot'|'DeleteDiskSnapshot'|'CreateDiskFromSnapshot'|'CreateRelationalDatabase'|'UpdateRelationalDatabase'|'DeleteRelationalDatabase'|'CreateRelationalDatabaseFromSnapshot'|'CreateRelationalDatabaseSnapshot'|'DeleteRelationalDatabaseSnapshot'|'UpdateRelationalDatabaseParameters'|'StartRelationalDatabase'|'RebootRelationalDatabase'|'StopRelationalDatabase'|'EnableAddOn'|'DisableAddOn'|'PutAlarm'|'GetAlarms'|'DeleteAlarm'|'TestAlarm'|'CreateContactMethod'|'GetContactMethods'|'SendContactMethodVerification'|'DeleteContactMethod'|'CreateDistribution'|'UpdateDistribution'|'DeleteDistribution'|'ResetDistributionCache'|'AttachCertificateToDistribution'|'DetachCertificateFromDistribution'|'UpdateDistributionBundle'|'SetIpAddressType'|'CreateCertificate'|'DeleteCertificate'|'CreateContainerService'|'UpdateContainerService'|'DeleteContainerService'|'CreateContainerServiceDeployment'|'CreateContainerServiceRegistryLogin'|'RegisterContainerImage'|'DeleteContainerImage'|'CreateBucket'|'DeleteBucket'|'CreateBucketAccessKey'|'DeleteBucketAccessKey'|'UpdateBucketBundle'|'UpdateBucket'|'SetResourceAccessForBucket'|'UpdateInstanceMetadataOptions'|'StartGUISession'|'StopGUISession'|'SetupInstanceHttps',
     *     status?: 'NotStarted'|'Started'|'Failed'|'Completed'|'Succeeded',
     *     statusChangedAt?: \Aws\Api\DateTimeResult,
     *     errorCode?: string,
     *     errorDetails?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
