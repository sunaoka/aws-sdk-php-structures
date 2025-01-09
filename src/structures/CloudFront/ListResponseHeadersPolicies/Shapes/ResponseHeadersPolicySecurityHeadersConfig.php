<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListResponseHeadersPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseHeadersPolicyXSSProtection $XSSProtection
 * @property ResponseHeadersPolicyFrameOptions $FrameOptions
 * @property ResponseHeadersPolicyReferrerPolicy $ReferrerPolicy
 * @property ResponseHeadersPolicyContentSecurityPolicy $ContentSecurityPolicy
 * @property ResponseHeadersPolicyContentTypeOptions $ContentTypeOptions
 * @property ResponseHeadersPolicyStrictTransportSecurity $StrictTransportSecurity
 */
class ResponseHeadersPolicySecurityHeadersConfig extends Shape
{
    /**
     * @param array{
     *     XSSProtection?: ResponseHeadersPolicyXSSProtection,
     *     FrameOptions?: ResponseHeadersPolicyFrameOptions,
     *     ReferrerPolicy?: ResponseHeadersPolicyReferrerPolicy,
     *     ContentSecurityPolicy?: ResponseHeadersPolicyContentSecurityPolicy,
     *     ContentTypeOptions?: ResponseHeadersPolicyContentTypeOptions,
     *     StrictTransportSecurity?: ResponseHeadersPolicyStrictTransportSecurity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
