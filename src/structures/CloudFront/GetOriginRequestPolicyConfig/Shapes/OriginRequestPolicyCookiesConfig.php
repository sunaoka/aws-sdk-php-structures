<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginRequestPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'all'|'allExcept' $CookieBehavior
 * @property CookieNames|null $Cookies
 */
class OriginRequestPolicyCookiesConfig extends Shape
{
    /**
     * @param array{
     *     CookieBehavior: 'none'|'whitelist'|'all'|'allExcept',
     *     Cookies?: CookieNames|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
