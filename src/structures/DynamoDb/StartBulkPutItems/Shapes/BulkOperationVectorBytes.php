<?php

namespace Sunaoka\Aws\Structures\DynamoDb\StartBulkPutItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $BulkPutVectorBytes
 */
class BulkOperationVectorBytes extends Shape
{
    /**
     * @param array{BulkPutVectorBytes?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
