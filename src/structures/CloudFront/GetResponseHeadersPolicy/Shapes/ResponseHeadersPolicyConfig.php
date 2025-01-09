<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comment
 * @property string $Name
 * @property ResponseHeadersPolicyCorsConfig $CorsConfig
 * @property ResponseHeadersPolicySecurityHeadersConfig $SecurityHeadersConfig
 * @property ResponseHeadersPolicyServerTimingHeadersConfig $ServerTimingHeadersConfig
 * @property ResponseHeadersPolicyCustomHeadersConfig $CustomHeadersConfig
 * @property ResponseHeadersPolicyRemoveHeadersConfig $RemoveHeadersConfig
 */
class ResponseHeadersPolicyConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string,
     *     Name: string,
     *     CorsConfig?: ResponseHeadersPolicyCorsConfig,
     *     SecurityHeadersConfig?: ResponseHeadersPolicySecurityHeadersConfig,
     *     ServerTimingHeadersConfig?: ResponseHeadersPolicyServerTimingHeadersConfig,
     *     CustomHeadersConfig?: ResponseHeadersPolicyCustomHeadersConfig,
     *     RemoveHeadersConfig?: ResponseHeadersPolicyRemoveHeadersConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
