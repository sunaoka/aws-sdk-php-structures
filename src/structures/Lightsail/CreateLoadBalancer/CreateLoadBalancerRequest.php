<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 * @property int<-1, 65535> $instancePort
 * @property string|null $healthCheckPath
 * @property string|null $certificateName
 * @property string|null $certificateDomainName
 * @property list<string>|null $certificateAlternativeNames
 * @property list<Shapes\Tag>|null $tags
 * @property 'dualstack'|'ipv4'|'ipv6'|null $ipAddressType
 * @property string|null $tlsPolicyName
 */
class CreateLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     loadBalancerName: string,
     *     instancePort: int<-1, 65535>,
     *     healthCheckPath?: string|null,
     *     certificateName?: string|null,
     *     certificateDomainName?: string|null,
     *     certificateAlternativeNames?: list<string>|null,
     *     tags?: list<Shapes\Tag>|null,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6'|null,
     *     tlsPolicyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
