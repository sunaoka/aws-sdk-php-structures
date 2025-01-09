<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 's3'|'iotsitewise'|'iottwinmaker' $type
 * @property S3SourceConfiguration $s3Configuration
 * @property IotSiteWiseSourceConfiguration $iotSiteWiseConfiguration
 * @property IotTwinMakerSourceConfiguration $iotTwinMakerConfiguration
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 's3'|'iotsitewise'|'iottwinmaker',
     *     s3Configuration?: S3SourceConfiguration,
     *     iotSiteWiseConfiguration?: IotSiteWiseSourceConfiguration,
     *     iotTwinMakerConfiguration?: IotTwinMakerSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
