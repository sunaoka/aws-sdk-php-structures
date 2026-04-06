<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 's3'|'iotsitewise'|'iottwinmaker' $type
 * @property S3SourceConfiguration|null $s3Configuration
 * @property IotSiteWiseSourceConfiguration|null $iotSiteWiseConfiguration
 * @property IotTwinMakerSourceConfiguration|null $iotTwinMakerConfiguration
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 's3'|'iotsitewise'|'iottwinmaker',
     *     s3Configuration?: S3SourceConfiguration|null,
     *     iotSiteWiseConfiguration?: IotSiteWiseSourceConfiguration|null,
     *     iotTwinMakerConfiguration?: IotTwinMakerSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
