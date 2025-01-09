<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 * @property int<-1, 65535> $instancePort
 * @property string $healthCheckPath
 * @property string $certificateName
 * @property string $certificateDomainName
 * @property list<string> $certificateAlternativeNames
 * @property list<Shapes\Tag> $tags
 * @property 'dualstack'|'ipv4'|'ipv6' $ipAddressType
 * @property string $tlsPolicyName
 */
class CreateLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     loadBalancerName: string,
     *     instancePort: int<-1, 65535>,
     *     healthCheckPath?: string,
     *     certificateName?: string,
     *     certificateDomainName?: string,
     *     certificateAlternativeNames?: list<string>,
     *     tags?: list<Shapes\Tag>,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6',
     *     tlsPolicyName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
