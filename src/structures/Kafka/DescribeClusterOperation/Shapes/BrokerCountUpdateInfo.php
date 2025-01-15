<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $CreatedBrokerIds
 * @property list<double>|null $DeletedBrokerIds
 */
class BrokerCountUpdateInfo extends Shape
{
    /**
     * @param array{
     *     CreatedBrokerIds?: list<double>|null,
     *     DeletedBrokerIds?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
