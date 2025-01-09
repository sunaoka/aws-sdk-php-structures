<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AppCookieStickinessPolicy> $AppCookieStickinessPolicies
 * @property list<LBCookieStickinessPolicy> $LBCookieStickinessPolicies
 * @property list<string> $OtherPolicies
 */
class Policies extends Shape
{
    /**
     * @param array{
     *     AppCookieStickinessPolicies?: list<AppCookieStickinessPolicy>,
     *     LBCookieStickinessPolicies?: list<LBCookieStickinessPolicy>,
     *     OtherPolicies?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
