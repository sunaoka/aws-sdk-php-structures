<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $TimestampFormats
 */
class HiveJsonSerDe extends Shape
{
    /**
     * @param array{TimestampFormats?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
