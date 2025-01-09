<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'GZIP' $ContentEncoding
 * @property list<HttpEndpointCommonAttribute> $CommonAttributes
 */
class HttpEndpointRequestConfiguration extends Shape
{
    /**
     * @param array{
     *     ContentEncoding?: 'NONE'|'GZIP',
     *     CommonAttributes?: list<HttpEndpointCommonAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
