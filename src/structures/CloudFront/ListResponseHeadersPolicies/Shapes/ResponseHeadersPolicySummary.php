<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListResponseHeadersPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'managed'|'custom' $Type
 * @property ResponseHeadersPolicy $ResponseHeadersPolicy
 */
class ResponseHeadersPolicySummary extends Shape
{
    /**
     * @param array{
     *     Type: 'managed'|'custom',
     *     ResponseHeadersPolicy: ResponseHeadersPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
