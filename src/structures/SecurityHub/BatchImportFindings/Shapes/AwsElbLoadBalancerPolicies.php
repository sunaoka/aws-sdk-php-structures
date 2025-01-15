<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsElbAppCookieStickinessPolicy>|null $AppCookieStickinessPolicies
 * @property list<AwsElbLbCookieStickinessPolicy>|null $LbCookieStickinessPolicies
 * @property list<string>|null $OtherPolicies
 */
class AwsElbLoadBalancerPolicies extends Shape
{
    /**
     * @param array{
     *     AppCookieStickinessPolicies?: list<AwsElbAppCookieStickinessPolicy>|null,
     *     LbCookieStickinessPolicies?: list<AwsElbLbCookieStickinessPolicy>|null,
     *     OtherPolicies?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
