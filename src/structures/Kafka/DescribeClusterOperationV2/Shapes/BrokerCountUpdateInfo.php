<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $CreatedBrokerIds
 * @property list<double> $DeletedBrokerIds
 */
class BrokerCountUpdateInfo extends Shape
{
    /**
     * @param array{
     *     CreatedBrokerIds?: list<double>,
     *     DeletedBrokerIds?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
