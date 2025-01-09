<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Value
 * @property string $TableArn
 * @property list<string> $PartitionKey
 */
class QuerySpatialCoverageMax extends Shape
{
    /**
     * @param array{
     *     Value?: double,
     *     TableArn?: string,
     *     PartitionKey?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
