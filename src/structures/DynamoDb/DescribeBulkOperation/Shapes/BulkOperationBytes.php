<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBulkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $BulkPutBytes
 */
class BulkOperationBytes extends Shape
{
    /**
     * @param array{BulkPutBytes?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
