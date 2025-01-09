<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsElbAppCookieStickinessPolicy> $AppCookieStickinessPolicies
 * @property list<AwsElbLbCookieStickinessPolicy> $LbCookieStickinessPolicies
 * @property list<string> $OtherPolicies
 */
class AwsElbLoadBalancerPolicies extends Shape
{
    /**
     * @param array{
     *     AppCookieStickinessPolicies?: list<AwsElbAppCookieStickinessPolicy>,
     *     LbCookieStickinessPolicies?: list<AwsElbLbCookieStickinessPolicy>,
     *     OtherPolicies?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
