<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Config|null $s3Config
 * @property TimestreamConfig|null $timestreamConfig
 */
class DataDestinationConfig extends Shape
{
    /**
     * @param array{
     *     s3Config?: S3Config|null,
     *     timestreamConfig?: TimestreamConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
