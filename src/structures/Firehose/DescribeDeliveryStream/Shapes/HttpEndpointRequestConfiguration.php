<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'GZIP'|null $ContentEncoding
 * @property list<HttpEndpointCommonAttribute>|null $CommonAttributes
 */
class HttpEndpointRequestConfiguration extends Shape
{
    /**
     * @param array{
     *     ContentEncoding?: 'NONE'|'GZIP'|null,
     *     CommonAttributes?: list<HttpEndpointCommonAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
