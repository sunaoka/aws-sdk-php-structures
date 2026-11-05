<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBulkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableName
 * @property string|null $TableId
 */
class BulkOperationTableDetail extends Shape
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     TableId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
