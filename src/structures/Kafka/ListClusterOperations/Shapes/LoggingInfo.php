<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizerLogs|null $AuthorizerLogs
 * @property BrokerLogs $BrokerLogs
 */
class LoggingInfo extends Shape
{
    /**
     * @param array{
     *     AuthorizerLogs?: AuthorizerLogs|null,
     *     BrokerLogs: BrokerLogs
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
