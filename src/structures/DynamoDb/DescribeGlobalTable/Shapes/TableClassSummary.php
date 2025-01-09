<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS' $TableClass
 * @property \Aws\Api\DateTimeResult $LastUpdateDateTime
 */
class TableClassSummary extends Shape
{
    /**
     * @param array{
     *     TableClass?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS',
     *     LastUpdateDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
