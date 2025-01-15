<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseHeadersPolicyAccessControlAllowOrigins $AccessControlAllowOrigins
 * @property ResponseHeadersPolicyAccessControlAllowHeaders $AccessControlAllowHeaders
 * @property ResponseHeadersPolicyAccessControlAllowMethods $AccessControlAllowMethods
 * @property bool $AccessControlAllowCredentials
 * @property ResponseHeadersPolicyAccessControlExposeHeaders|null $AccessControlExposeHeaders
 * @property int|null $AccessControlMaxAgeSec
 * @property bool $OriginOverride
 */
class ResponseHeadersPolicyCorsConfig extends Shape
{
    /**
     * @param array{
     *     AccessControlAllowOrigins: ResponseHeadersPolicyAccessControlAllowOrigins,
     *     AccessControlAllowHeaders: ResponseHeadersPolicyAccessControlAllowHeaders,
     *     AccessControlAllowMethods: ResponseHeadersPolicyAccessControlAllowMethods,
     *     AccessControlAllowCredentials: bool,
     *     AccessControlExposeHeaders?: ResponseHeadersPolicyAccessControlExposeHeaders|null,
     *     AccessControlMaxAgeSec?: int|null,
     *     OriginOverride: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
