<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property ResponseHeadersPolicyConfig $ResponseHeadersPolicyConfig
 */
class ResponseHeadersPolicy extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     ResponseHeadersPolicyConfig: ResponseHeadersPolicyConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
