<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $defaultTTL
 * @property int|null $minimumTTL
 * @property int|null $maximumTTL
 * @property string|null $allowedHTTPMethods
 * @property string|null $cachedHTTPMethods
 * @property CookieObject|null $forwardedCookies
 * @property HeaderObject|null $forwardedHeaders
 * @property QueryStringObject|null $forwardedQueryStrings
 */
class CacheSettings extends Shape
{
    /**
     * @param array{
     *     defaultTTL?: int|null,
     *     minimumTTL?: int|null,
     *     maximumTTL?: int|null,
     *     allowedHTTPMethods?: string|null,
     *     cachedHTTPMethods?: string|null,
     *     forwardedCookies?: CookieObject|null,
     *     forwardedHeaders?: HeaderObject|null,
     *     forwardedQueryStrings?: QueryStringObject|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
