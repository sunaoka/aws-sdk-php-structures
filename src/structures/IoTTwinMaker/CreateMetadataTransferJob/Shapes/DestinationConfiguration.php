<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 's3'|'iotsitewise'|'iottwinmaker' $type
 * @property S3DestinationConfiguration $s3Configuration
 * @property IotTwinMakerDestinationConfiguration $iotTwinMakerConfiguration
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 's3'|'iotsitewise'|'iottwinmaker',
     *     s3Configuration?: S3DestinationConfiguration,
     *     iotTwinMakerConfiguration?: IotTwinMakerDestinationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
