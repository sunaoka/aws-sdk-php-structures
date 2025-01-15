<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property string|null $logGroup
 */
class CloudWatchLogsLogDeliveryDescription extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     logGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
