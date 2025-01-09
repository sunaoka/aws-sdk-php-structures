<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateOriginRequestPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comment
 * @property string $Name
 * @property OriginRequestPolicyHeadersConfig $HeadersConfig
 * @property OriginRequestPolicyCookiesConfig $CookiesConfig
 * @property OriginRequestPolicyQueryStringsConfig $QueryStringsConfig
 */
class OriginRequestPolicyConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string,
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
