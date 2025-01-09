<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Override
 * @property string $ContentSecurityPolicy
 */
class ResponseHeadersPolicyContentSecurityPolicy extends Shape
{
    /**
     * @param array{
     *     Override: bool,
     *     ContentSecurityPolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
