<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $supportCode
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Tag> $tags
 * @property string $dnsName
 * @property 'active'|'provisioning'|'active_impaired'|'failed'|'unknown' $state
 * @property 'HTTP_HTTPS'|'HTTP' $protocol
 * @property list<int> $publicPorts
 * @property string $healthCheckPath
 * @property int $instancePort
 * @property list<InstanceHealthSummary> $instanceHealthSummary
 * @property list<LoadBalancerTlsCertificateSummary> $tlsCertificateSummaries
 * @property array<'HealthCheckPath'|'SessionStickinessEnabled'|'SessionStickiness_LB_CookieDurationSeconds'|'HttpsRedirectionEnabled'|'TlsPolicyName', string> $configurationOptions
 * @property 'dualstack'|'ipv4'|'ipv6' $ipAddressType
 * @property bool $httpsRedirectionEnabled
 * @property string $tlsPolicyName
 */
class LoadBalancer extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     supportCode?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     location?: ResourceLocation,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     tags?: list<Tag>,
     *     dnsName?: string,
     *     state?: 'active'|'provisioning'|'active_impaired'|'failed'|'unknown',
     *     protocol?: 'HTTP_HTTPS'|'HTTP',
     *     publicPorts?: list<int>,
     *     healthCheckPath?: string,
     *     instancePort?: int,
     *     instanceHealthSummary?: list<InstanceHealthSummary>,
     *     tlsCertificateSummaries?: list<LoadBalancerTlsCertificateSummary>,
     *     configurationOptions?: array<'HealthCheckPath'|'SessionStickinessEnabled'|'SessionStickiness_LB_CookieDurationSeconds'|'HttpsRedirectionEnabled'|'TlsPolicyName', string>,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6',
     *     httpsRedirectionEnabled?: bool,
     *     tlsPolicyName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
