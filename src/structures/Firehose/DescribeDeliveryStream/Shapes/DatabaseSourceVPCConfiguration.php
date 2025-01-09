<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcEndpointServiceName
 */
class DatabaseSourceVPCConfiguration extends Shape
{
    /**
     * @param array{VpcEndpointServiceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
