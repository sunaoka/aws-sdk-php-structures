<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrokerLogs $BrokerLogs
 */
class LoggingInfo extends Shape
{
    /**
     * @param array{BrokerLogs: BrokerLogs} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
