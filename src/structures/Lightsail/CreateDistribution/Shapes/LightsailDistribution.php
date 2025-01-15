<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<string>|null $alternativeDomainNames
 * @property string|null $status
 * @property bool|null $isEnabled
 * @property string|null $domainName
 * @property string|null $bundleId
 * @property string|null $certificateName
 * @property Origin|null $origin
 * @property string|null $originPublicDNS
 * @property CacheBehavior|null $defaultCacheBehavior
 * @property CacheSettings|null $cacheBehaviorSettings
 * @property list<CacheBehaviorPerPath>|null $cacheBehaviors
 * @property bool|null $ableToUpdateBundle
 * @property 'dualstack'|'ipv4'|'ipv6'|null $ipAddressType
 * @property list<Tag>|null $tags
 * @property string|null $viewerMinimumTlsProtocolVersion
 */
class LightsailDistribution extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     supportCode?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     location?: ResourceLocation|null,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null,
     *     alternativeDomainNames?: list<string>|null,
     *     status?: string|null,
     *     isEnabled?: bool|null,
     *     domainName?: string|null,
     *     bundleId?: string|null,
     *     certificateName?: string|null,
     *     origin?: Origin|null,
     *     originPublicDNS?: string|null,
     *     defaultCacheBehavior?: CacheBehavior|null,
     *     cacheBehaviorSettings?: CacheSettings|null,
     *     cacheBehaviors?: list<CacheBehaviorPerPath>|null,
     *     ableToUpdateBundle?: bool|null,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6'|null,
     *     tags?: list<Tag>|null,
     *     viewerMinimumTlsProtocolVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
