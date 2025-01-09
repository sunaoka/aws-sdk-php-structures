<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property string $AttributeValue
 */
class HttpEndpointCommonAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     AttributeValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
