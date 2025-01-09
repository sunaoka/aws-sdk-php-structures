<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $logGroup
 */
class CloudWatchLogsLogDeliveryDescription extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     logGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
