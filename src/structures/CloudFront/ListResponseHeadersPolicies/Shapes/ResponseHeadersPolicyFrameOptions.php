<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListResponseHeadersPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Override
 * @property 'DENY'|'SAMEORIGIN' $FrameOption
 */
class ResponseHeadersPolicyFrameOptions extends Shape
{
    /**
     * @param array{
     *     Override: bool,
     *     FrameOption: 'DENY'|'SAMEORIGIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
