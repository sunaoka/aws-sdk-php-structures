<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateOriginRequestPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'all'|'allExcept' $CookieBehavior
 * @property CookieNames $Cookies
 */
class OriginRequestPolicyCookiesConfig extends Shape
{
    /**
     * @param array{
     *     CookieBehavior: 'none'|'whitelist'|'all'|'allExcept',
     *     Cookies?: CookieNames
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
