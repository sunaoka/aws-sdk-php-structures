<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $QueryString
 * @property CookiePreference $Cookies
 * @property Headers|null $Headers
 * @property QueryStringCacheKeys|null $QueryStringCacheKeys
 */
class ForwardedValues extends Shape
{
    /**
     * @param array{
     *     QueryString: bool,
     *     Cookies: CookiePreference,
     *     Headers?: Headers|null,
     *     QueryStringCacheKeys?: QueryStringCacheKeys|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
