<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Override
 * @property bool $IncludeSubdomains
 * @property bool $Preload
 * @property int $AccessControlMaxAgeSec
 */
class ResponseHeadersPolicyStrictTransportSecurity extends Shape
{
    /**
     * @param array{
     *     Override: bool,
     *     IncludeSubdomains?: bool,
     *     Preload?: bool,
     *     AccessControlMaxAgeSec: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
