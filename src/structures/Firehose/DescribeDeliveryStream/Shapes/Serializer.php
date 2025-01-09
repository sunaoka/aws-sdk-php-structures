<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParquetSerDe $ParquetSerDe
 * @property OrcSerDe $OrcSerDe
 */
class Serializer extends Shape
{
    /**
     * @param array{
     *     ParquetSerDe?: ParquetSerDe,
     *     OrcSerDe?: OrcSerDe
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
