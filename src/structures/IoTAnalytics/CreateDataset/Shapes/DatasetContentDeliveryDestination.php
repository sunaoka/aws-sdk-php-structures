<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IotEventsDestinationConfiguration $iotEventsDestinationConfiguration
 * @property S3DestinationConfiguration $s3DestinationConfiguration
 */
class DatasetContentDeliveryDestination extends Shape
{
    /**
     * @param array{
     *     iotEventsDestinationConfiguration?: IotEventsDestinationConfiguration,
     *     s3DestinationConfiguration?: S3DestinationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
