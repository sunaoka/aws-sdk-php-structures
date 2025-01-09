<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KinesisStreamARN
 * @property string $RoleARN
 */
class KinesisStreamSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     KinesisStreamARN: string,
     *     RoleARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
