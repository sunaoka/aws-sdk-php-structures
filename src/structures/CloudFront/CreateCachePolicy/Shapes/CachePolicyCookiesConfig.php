<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateCachePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'allExcept'|'all' $CookieBehavior
 * @property CookieNames|null $Cookies
 */
class CachePolicyCookiesConfig extends Shape
{
    /**
     * @param array{
     *     CookieBehavior: 'none'|'whitelist'|'allExcept'|'all',
     *     Cookies?: CookieNames|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
