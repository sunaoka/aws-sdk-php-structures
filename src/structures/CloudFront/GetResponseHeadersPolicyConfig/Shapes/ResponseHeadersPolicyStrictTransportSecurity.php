<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Override
 * @property bool|null $IncludeSubdomains
 * @property bool|null $Preload
 * @property int $AccessControlMaxAgeSec
 */
class ResponseHeadersPolicyStrictTransportSecurity extends Shape
{
    /**
     * @param array{
     *     Override: bool,
     *     IncludeSubdomains?: bool|null,
     *     Preload?: bool|null,
     *     AccessControlMaxAgeSec: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
