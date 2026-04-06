<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IotEventsDestinationConfiguration|null $iotEventsDestinationConfiguration
 * @property S3DestinationConfiguration|null $s3DestinationConfiguration
 */
class DatasetContentDeliveryDestination extends Shape
{
    /**
     * @param array{
     *     iotEventsDestinationConfiguration?: IotEventsDestinationConfiguration|null,
     *     s3DestinationConfiguration?: S3DestinationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
