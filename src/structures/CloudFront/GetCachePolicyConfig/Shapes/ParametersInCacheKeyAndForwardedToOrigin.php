<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCachePolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableAcceptEncodingGzip
 * @property bool|null $EnableAcceptEncodingBrotli
 * @property CachePolicyHeadersConfig $HeadersConfig
 * @property CachePolicyCookiesConfig $CookiesConfig
 * @property CachePolicyQueryStringsConfig $QueryStringsConfig
 */
class ParametersInCacheKeyAndForwardedToOrigin extends Shape
{
    /**
     * @param array{
     *     EnableAcceptEncodingGzip: bool,
     *     EnableAcceptEncodingBrotli?: bool|null,
     *     HeadersConfig: CachePolicyHeadersConfig,
     *     CookiesConfig: CachePolicyCookiesConfig,
     *     QueryStringsConfig: CachePolicyQueryStringsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
