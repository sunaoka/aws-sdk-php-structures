<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $supportCode
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<string> $alternativeDomainNames
 * @property string $status
 * @property bool $isEnabled
 * @property string $domainName
 * @property string $bundleId
 * @property string $certificateName
 * @property Origin $origin
 * @property string $originPublicDNS
 * @property CacheBehavior $defaultCacheBehavior
 * @property CacheSettings $cacheBehaviorSettings
 * @property list<CacheBehaviorPerPath> $cacheBehaviors
 * @property bool $ableToUpdateBundle
 * @property 'dualstack'|'ipv4'|'ipv6' $ipAddressType
 * @property list<Tag> $tags
 * @property string $viewerMinimumTlsProtocolVersion
 */
class LightsailDistribution extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     supportCode?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     location?: ResourceLocation,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     alternativeDomainNames?: list<string>,
     *     status?: string,
     *     isEnabled?: bool,
     *     domainName?: string,
     *     bundleId?: string,
     *     certificateName?: string,
     *     origin?: Origin,
     *     originPublicDNS?: string,
     *     defaultCacheBehavior?: CacheBehavior,
     *     cacheBehaviorSettings?: CacheSettings,
     *     cacheBehaviors?: list<CacheBehaviorPerPath>,
     *     ableToUpdateBundle?: bool,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6',
     *     tags?: list<Tag>,
     *     viewerMinimumTlsProtocolVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
