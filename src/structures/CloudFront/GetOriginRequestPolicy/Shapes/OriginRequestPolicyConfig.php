<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginRequestPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property string $Name
 * @property OriginRequestPolicyHeadersConfig $HeadersConfig
 * @property OriginRequestPolicyCookiesConfig $CookiesConfig
 * @property OriginRequestPolicyQueryStringsConfig $QueryStringsConfig
 */
class OriginRequestPolicyConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     Name: string,
     *     HeadersConfig: OriginRequestPolicyHeadersConfig,
     *     CookiesConfig: OriginRequestPolicyCookiesConfig,
     *     QueryStringsConfig: OriginRequestPolicyQueryStringsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
