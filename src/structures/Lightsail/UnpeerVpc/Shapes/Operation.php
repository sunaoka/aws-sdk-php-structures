<?php

namespace Sunaoka\Aws\Structures\Lightsail\UnpeerVpc\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $resourceName
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property bool|null $isTerminal
 * @property string|null $operationDetails
 * @property 'DeleteKnownHostKeys'|'DeleteInstance'|'CreateInstance'|'StopInstance'|'StartInstance'|'RebootInstance'|'OpenInstancePublicPorts'|'PutInstancePublicPorts'|'CloseInstancePublicPorts'|'AllocateStaticIp'|'ReleaseStaticIp'|'AttachStaticIp'|'DetachStaticIp'|'UpdateDomainEntry'|'DeleteDomainEntry'|'CreateDomain'|'DeleteDomain'|'CreateInstanceSnapshot'|'DeleteInstanceSnapshot'|'CreateInstancesFromSnapshot'|'CreateLoadBalancer'|'DeleteLoadBalancer'|'AttachInstancesToLoadBalancer'|'DetachInstancesFromLoadBalancer'|'UpdateLoadBalancerAttribute'|'CreateLoadBalancerTlsCertificate'|'DeleteLoadBalancerTlsCertificate'|'AttachLoadBalancerTlsCertificate'|'CreateDisk'|'DeleteDisk'|'AttachDisk'|'DetachDisk'|'CreateDiskSnapshot'|'DeleteDiskSnapshot'|'CreateDiskFromSnapshot'|'CreateRelationalDatabase'|'UpdateRelationalDatabase'|'DeleteRelationalDatabase'|'CreateRelationalDatabaseFromSnapshot'|'CreateRelationalDatabaseSnapshot'|'DeleteRelationalDatabaseSnapshot'|'UpdateRelationalDatabaseParameters'|'StartRelationalDatabase'|'RebootRelationalDatabase'|'StopRelationalDatabase'|'EnableAddOn'|'DisableAddOn'|'PutAlarm'|'GetAlarms'|'DeleteAlarm'|'TestAlarm'|'CreateContactMethod'|'GetContactMethods'|'SendContactMethodVerification'|'DeleteContactMethod'|'CreateDistribution'|'UpdateDistribution'|'DeleteDistribution'|'ResetDistributionCache'|'AttachCertificateToDistribution'|'DetachCertificateFromDistribution'|'UpdateDistributionBundle'|'SetIpAddressType'|'CreateCertificate'|'DeleteCertificate'|'CreateContainerService'|'UpdateContainerService'|'DeleteContainerService'|'CreateContainerServiceDeployment'|'CreateContainerServiceRegistryLogin'|'RegisterContainerImage'|'DeleteContainerImage'|'CreateBucket'|'DeleteBucket'|'CreateBucketAccessKey'|'DeleteBucketAccessKey'|'UpdateBucketBundle'|'UpdateBucket'|'SetResourceAccessForBucket'|'UpdateInstanceMetadataOptions'|'StartGUISession'|'StopGUISession'|'SetupInstanceHttps'|null $operationType
 * @property 'NotStarted'|'Started'|'Failed'|'Completed'|'Succeeded'|null $status
 * @property \Aws\Api\DateTimeResult|null $statusChangedAt
 * @property string|null $errorCode
 * @property string|null $errorDetails
 */
class Operation extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     resourceName?: string|null,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     location?: ResourceLocation|null,
     *     isTerminal?: bool|null,
     *     operationDetails?: string|null,
     *     operationType?: 'DeleteKnownHostKeys'|'DeleteInstance'|'CreateInstance'|'StopInstance'|'StartInstance'|'RebootInstance'|'OpenInstancePublicPorts'|'PutInstancePublicPorts'|'CloseInstancePublicPorts'|'AllocateStaticIp'|'ReleaseStaticIp'|'AttachStaticIp'|'DetachStaticIp'|'UpdateDomainEntry'|'DeleteDomainEntry'|'CreateDomain'|'DeleteDomain'|'CreateInstanceSnapshot'|'DeleteInstanceSnapshot'|'CreateInstancesFromSnapshot'|'CreateLoadBalancer'|'DeleteLoadBalancer'|'AttachInstancesToLoadBalancer'|'DetachInstancesFromLoadBalancer'|'UpdateLoadBalancerAttribute'|'CreateLoadBalancerTlsCertificate'|'DeleteLoadBalancerTlsCertificate'|'AttachLoadBalancerTlsCertificate'|'CreateDisk'|'DeleteDisk'|'AttachDisk'|'DetachDisk'|'CreateDiskSnapshot'|'DeleteDiskSnapshot'|'CreateDiskFromSnapshot'|'CreateRelationalDatabase'|'UpdateRelationalDatabase'|'DeleteRelationalDatabase'|'CreateRelationalDatabaseFromSnapshot'|'CreateRelationalDatabaseSnapshot'|'DeleteRelationalDatabaseSnapshot'|'UpdateRelationalDatabaseParameters'|'StartRelationalDatabase'|'RebootRelationalDatabase'|'StopRelationalDatabase'|'EnableAddOn'|'DisableAddOn'|'PutAlarm'|'GetAlarms'|'DeleteAlarm'|'TestAlarm'|'CreateContactMethod'|'GetContactMethods'|'SendContactMethodVerification'|'DeleteContactMethod'|'CreateDistribution'|'UpdateDistribution'|'DeleteDistribution'|'ResetDistributionCache'|'AttachCertificateToDistribution'|'DetachCertificateFromDistribution'|'UpdateDistributionBundle'|'SetIpAddressType'|'CreateCertificate'|'DeleteCertificate'|'CreateContainerService'|'UpdateContainerService'|'DeleteContainerService'|'CreateContainerServiceDeployment'|'CreateContainerServiceRegistryLogin'|'RegisterContainerImage'|'DeleteContainerImage'|'CreateBucket'|'DeleteBucket'|'CreateBucketAccessKey'|'DeleteBucketAccessKey'|'UpdateBucketBundle'|'UpdateBucket'|'SetResourceAccessForBucket'|'UpdateInstanceMetadataOptions'|'StartGUISession'|'StopGUISession'|'SetupInstanceHttps'|null,
     *     status?: 'NotStarted'|'Started'|'Failed'|'Completed'|'Succeeded'|null,
     *     statusChangedAt?: \Aws\Api\DateTimeResult|null,
     *     errorCode?: string|null,
     *     errorDetails?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
