<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 's3'|'iotsitewise'|'iottwinmaker' $type
 * @property S3DestinationConfiguration|null $s3Configuration
 * @property IotTwinMakerDestinationConfiguration|null $iotTwinMakerConfiguration
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 's3'|'iotsitewise'|'iottwinmaker',
     *     s3Configuration?: S3DestinationConfiguration|null,
     *     iotTwinMakerConfiguration?: IotTwinMakerDestinationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
