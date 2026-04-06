<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Value
 * @property string|null $TableArn
 * @property list<string>|null $PartitionKey
 */
class QuerySpatialCoverageMax extends Shape
{
    /**
     * @param array{
     *     Value?: double|null,
     *     TableArn?: string|null,
     *     PartitionKey?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
