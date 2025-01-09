<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLBCookieStickinessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property string $PolicyName
 * @property int $CookieExpirationPeriod
 */
class CreateLBCookieStickinessPolicyRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     PolicyName: string,
     *     CookieExpirationPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
