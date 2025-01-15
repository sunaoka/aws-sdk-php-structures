<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerServiceName
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property 'nano'|'micro'|'small'|'medium'|'large'|'xlarge'|null $power
 * @property string|null $powerId
 * @property 'PENDING'|'READY'|'RUNNING'|'UPDATING'|'DELETING'|'DISABLED'|'DEPLOYING'|null $state
 * @property ContainerServiceStateDetail|null $stateDetail
 * @property int<1, 20>|null $scale
 * @property ContainerServiceDeployment|null $currentDeployment
 * @property ContainerServiceDeployment|null $nextDeployment
 * @property bool|null $isDisabled
 * @property string|null $principalArn
 * @property string|null $privateDomainName
 * @property array<string, list<string>>|null $publicDomainNames
 * @property string|null $url
 * @property PrivateRegistryAccess|null $privateRegistryAccess
 */
class ContainerService extends Shape
{
    /**
     * @param array{
     *     containerServiceName?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     location?: ResourceLocation|null,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null,
     *     tags?: list<Tag>|null,
     *     power?: 'nano'|'micro'|'small'|'medium'|'large'|'xlarge'|null,
     *     powerId?: string|null,
     *     state?: 'PENDING'|'READY'|'RUNNING'|'UPDATING'|'DELETING'|'DISABLED'|'DEPLOYING'|null,
     *     stateDetail?: ContainerServiceStateDetail|null,
     *     scale?: int<1, 20>|null,
     *     currentDeployment?: ContainerServiceDeployment|null,
     *     nextDeployment?: ContainerServiceDeployment|null,
     *     isDisabled?: bool|null,
     *     principalArn?: string|null,
     *     privateDomainName?: string|null,
     *     publicDomainNames?: array<string, list<string>>|null,
     *     url?: string|null,
     *     privateRegistryAccess?: PrivateRegistryAccess|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
