<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListResponseHeadersPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property string $Name
 * @property ResponseHeadersPolicyCorsConfig|null $CorsConfig
 * @property ResponseHeadersPolicySecurityHeadersConfig|null $SecurityHeadersConfig
 * @property ResponseHeadersPolicyServerTimingHeadersConfig|null $ServerTimingHeadersConfig
 * @property ResponseHeadersPolicyCustomHeadersConfig|null $CustomHeadersConfig
 * @property ResponseHeadersPolicyRemoveHeadersConfig|null $RemoveHeadersConfig
 */
class ResponseHeadersPolicyConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     Name: string,
     *     CorsConfig?: ResponseHeadersPolicyCorsConfig|null,
     *     SecurityHeadersConfig?: ResponseHeadersPolicySecurityHeadersConfig|null,
     *     ServerTimingHeadersConfig?: ResponseHeadersPolicyServerTimingHeadersConfig|null,
     *     CustomHeadersConfig?: ResponseHeadersPolicyCustomHeadersConfig|null,
     *     RemoveHeadersConfig?: ResponseHeadersPolicyRemoveHeadersConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
