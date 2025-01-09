<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Header
 */
class ResponseHeadersPolicyRemoveHeader extends Shape
{
    /**
     * @param array{Header: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
