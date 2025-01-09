<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Override
 */
class ResponseHeadersPolicyContentTypeOptions extends Shape
{
    /**
     * @param array{Override: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
