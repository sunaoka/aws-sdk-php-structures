<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AppCookieStickinessPolicy>|null $AppCookieStickinessPolicies
 * @property list<LBCookieStickinessPolicy>|null $LBCookieStickinessPolicies
 * @property list<string>|null $OtherPolicies
 */
class Policies extends Shape
{
    /**
     * @param array{
     *     AppCookieStickinessPolicies?: list<AppCookieStickinessPolicy>|null,
     *     LBCookieStickinessPolicies?: list<LBCookieStickinessPolicy>|null,
     *     OtherPolicies?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
