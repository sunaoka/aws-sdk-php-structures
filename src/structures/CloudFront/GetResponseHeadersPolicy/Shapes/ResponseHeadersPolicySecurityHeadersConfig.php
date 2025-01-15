<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseHeadersPolicyXSSProtection|null $XSSProtection
 * @property ResponseHeadersPolicyFrameOptions|null $FrameOptions
 * @property ResponseHeadersPolicyReferrerPolicy|null $ReferrerPolicy
 * @property ResponseHeadersPolicyContentSecurityPolicy|null $ContentSecurityPolicy
 * @property ResponseHeadersPolicyContentTypeOptions|null $ContentTypeOptions
 * @property ResponseHeadersPolicyStrictTransportSecurity|null $StrictTransportSecurity
 */
class ResponseHeadersPolicySecurityHeadersConfig extends Shape
{
    /**
     * @param array{
     *     XSSProtection?: ResponseHeadersPolicyXSSProtection|null,
     *     FrameOptions?: ResponseHeadersPolicyFrameOptions|null,
     *     ReferrerPolicy?: ResponseHeadersPolicyReferrerPolicy|null,
     *     ContentSecurityPolicy?: ResponseHeadersPolicyContentSecurityPolicy|null,
     *     ContentTypeOptions?: ResponseHeadersPolicyContentTypeOptions|null,
     *     StrictTransportSecurity?: ResponseHeadersPolicyStrictTransportSecurity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
