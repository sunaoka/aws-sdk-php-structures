<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity\Shapes;

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
 * @property RateLimitJA3Fingerprint|null $JA3Fingerprint
 * @property RateLimitJA4Fingerprint|null $JA4Fingerprint
 * @property RateLimitAsn|null $ASN
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
     *     UriPath?: RateLimitUriPath|null,
     *     JA3Fingerprint?: RateLimitJA3Fingerprint|null,
     *     JA4Fingerprint?: RateLimitJA4Fingerprint|null,
     *     ASN?: RateLimitAsn|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
