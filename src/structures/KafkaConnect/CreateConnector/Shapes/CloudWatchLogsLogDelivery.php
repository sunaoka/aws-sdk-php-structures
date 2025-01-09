<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $logGroup
 */
class CloudWatchLogsLogDelivery extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     logGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
