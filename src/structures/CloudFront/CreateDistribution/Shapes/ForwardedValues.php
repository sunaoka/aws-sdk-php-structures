<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $QueryString
 * @property CookiePreference $Cookies
 * @property Headers $Headers
 * @property QueryStringCacheKeys $QueryStringCacheKeys
 */
class ForwardedValues extends Shape
{
    /**
     * @param array{
     *     QueryString: bool,
     *     Cookies: CookiePreference,
     *     Headers?: Headers,
     *     QueryStringCacheKeys?: QueryStringCacheKeys
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
