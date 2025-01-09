<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RateLimitHeader $Header
 * @property RateLimitCookie $Cookie
 * @property RateLimitQueryArgument $QueryArgument
 * @property RateLimitQueryString $QueryString
 * @property RateLimitHTTPMethod $HTTPMethod
 * @property RateLimitForwardedIP $ForwardedIP
 * @property RateLimitIP $IP
 * @property RateLimitLabelNamespace $LabelNamespace
 * @property RateLimitUriPath $UriPath
 */
class RateBasedStatementCustomKey extends Shape
{
    /**
     * @param array{
     *     Header?: RateLimitHeader,
     *     Cookie?: RateLimitCookie,
     *     QueryArgument?: RateLimitQueryArgument,
     *     QueryString?: RateLimitQueryString,
     *     HTTPMethod?: RateLimitHTTPMethod,
     *     ForwardedIP?: RateLimitForwardedIP,
     *     IP?: RateLimitIP,
     *     LabelNamespace?: RateLimitLabelNamespace,
     *     UriPath?: RateLimitUriPath
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
