<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $defaultTTL
 * @property int $minimumTTL
 * @property int $maximumTTL
 * @property string $allowedHTTPMethods
 * @property string $cachedHTTPMethods
 * @property CookieObject $forwardedCookies
 * @property HeaderObject $forwardedHeaders
 * @property QueryStringObject $forwardedQueryStrings
 */
class CacheSettings extends Shape
{
    /**
     * @param array{
     *     defaultTTL?: int,
     *     minimumTTL?: int,
     *     maximumTTL?: int,
     *     allowedHTTPMethods?: string,
     *     cachedHTTPMethods?: string,
     *     forwardedCookies?: CookieObject,
     *     forwardedHeaders?: HeaderObject,
     *     forwardedQueryStrings?: QueryStringObject
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
