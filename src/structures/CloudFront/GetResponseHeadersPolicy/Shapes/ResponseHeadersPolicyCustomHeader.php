<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Header
 * @property string $Value
 * @property bool $Override
 */
class ResponseHeadersPolicyCustomHeader extends Shape
{
    /**
     * @param array{
     *     Header: string,
     *     Value: string,
     *     Override: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
