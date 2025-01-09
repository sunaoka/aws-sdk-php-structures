<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerServiceDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerServiceName
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Tag> $tags
 * @property 'nano'|'micro'|'small'|'medium'|'large'|'xlarge' $power
 * @property string $powerId
 * @property 'PENDING'|'READY'|'RUNNING'|'UPDATING'|'DELETING'|'DISABLED'|'DEPLOYING' $state
 * @property ContainerServiceStateDetail $stateDetail
 * @property int $scale
 * @property ContainerServiceDeployment $currentDeployment
 * @property ContainerServiceDeployment $nextDeployment
 * @property bool $isDisabled
 * @property string $principalArn
 * @property string $privateDomainName
 * @property array<string, list<string>> $publicDomainNames
 * @property string $url
 * @property PrivateRegistryAccess $privateRegistryAccess
 */
class ContainerService extends Shape
{
    /**
     * @param array{
     *     containerServiceName?: string,
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     location?: ResourceLocation,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     tags?: list<Tag>,
     *     power?: 'nano'|'micro'|'small'|'medium'|'large'|'xlarge',
     *     powerId?: string,
     *     state?: 'PENDING'|'READY'|'RUNNING'|'UPDATING'|'DELETING'|'DISABLED'|'DEPLOYING',
     *     stateDetail?: ContainerServiceStateDetail,
     *     scale?: int,
     *     currentDeployment?: ContainerServiceDeployment,
     *     nextDeployment?: ContainerServiceDeployment,
     *     isDisabled?: bool,
     *     principalArn?: string,
     *     privateDomainName?: string,
     *     publicDomainNames?: array<string, list<string>>,
     *     url?: string,
     *     privateRegistryAccess?: PrivateRegistryAccess
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
