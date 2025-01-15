<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property string|null $dnsName
 * @property 'active'|'provisioning'|'active_impaired'|'failed'|'unknown'|null $state
 * @property 'HTTP_HTTPS'|'HTTP'|null $protocol
 * @property list<int<-1, 65535>>|null $publicPorts
 * @property string|null $healthCheckPath
 * @property int|null $instancePort
 * @property list<InstanceHealthSummary>|null $instanceHealthSummary
 * @property list<LoadBalancerTlsCertificateSummary>|null $tlsCertificateSummaries
 * @property array<'HealthCheckPath'|'SessionStickinessEnabled'|'SessionStickiness_LB_CookieDurationSeconds'|'HttpsRedirectionEnabled'|'TlsPolicyName', string>|null $configurationOptions
 * @property 'dualstack'|'ipv4'|'ipv6'|null $ipAddressType
 * @property bool|null $httpsRedirectionEnabled
 * @property string|null $tlsPolicyName
 */
class LoadBalancer extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     supportCode?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     location?: ResourceLocation|null,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null,
     *     tags?: list<Tag>|null,
     *     dnsName?: string|null,
     *     state?: 'active'|'provisioning'|'active_impaired'|'failed'|'unknown'|null,
     *     protocol?: 'HTTP_HTTPS'|'HTTP'|null,
     *     publicPorts?: list<int<-1, 65535>>|null,
     *     healthCheckPath?: string|null,
     *     instancePort?: int|null,
     *     instanceHealthSummary?: list<InstanceHealthSummary>|null,
     *     tlsCertificateSummaries?: list<LoadBalancerTlsCertificateSummary>|null,
     *     configurationOptions?: array<'HealthCheckPath'|'SessionStickinessEnabled'|'SessionStickiness_LB_CookieDurationSeconds'|'HttpsRedirectionEnabled'|'TlsPolicyName', string>|null,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6'|null,
     *     httpsRedirectionEnabled?: bool|null,
     *     tlsPolicyName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
