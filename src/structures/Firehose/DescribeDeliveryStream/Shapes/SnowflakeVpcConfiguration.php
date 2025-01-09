<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrivateLinkVpceId
 */
class SnowflakeVpcConfiguration extends Shape
{
    /**
     * @param array{PrivateLinkVpceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
