<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string|null $logGroup
 */
class CloudWatchLogsLogDelivery extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     logGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
