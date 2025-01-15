<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLBCookieStickinessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property string $PolicyName
 * @property int|null $CookieExpirationPeriod
 */
class CreateLBCookieStickinessPolicyRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     PolicyName: string,
     *     CookieExpirationPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
