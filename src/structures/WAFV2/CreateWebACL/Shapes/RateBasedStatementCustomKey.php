<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RateLimitHeader|null $Header
 * @property RateLimitCookie|null $Cookie
 * @property RateLimitQueryArgument|null $QueryArgument
 * @property RateLimitQueryString|null $QueryString
 * @property RateLimitHTTPMethod|null $HTTPMethod
 * @property RateLimitForwardedIP|null $ForwardedIP
 * @property RateLimitIP|null $IP
 * @property RateLimitLabelNamespace|null $LabelNamespace
 * @property RateLimitUriPath|null $UriPath
 */
class RateBasedStatementCustomKey extends Shape
{
    /**
     * @param array{
     *     Header?: RateLimitHeader|null,
     *     Cookie?: RateLimitCookie|null,
     *     QueryArgument?: RateLimitQueryArgument|null,
     *     QueryString?: RateLimitQueryString|null,
     *     HTTPMethod?: RateLimitHTTPMethod|null,
     *     ForwardedIP?: RateLimitForwardedIP|null,
     *     IP?: RateLimitIP|null,
     *     LabelNamespace?: RateLimitLabelNamespace|null,
     *     UriPath?: RateLimitUriPath|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
