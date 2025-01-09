<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateAppCookieStickinessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property string $PolicyName
 * @property string $CookieName
 */
class CreateAppCookieStickinessPolicyRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     PolicyName: string,
     *     CookieName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
