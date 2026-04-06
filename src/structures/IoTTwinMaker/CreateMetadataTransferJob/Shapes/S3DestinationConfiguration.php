<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $location
 */
class S3DestinationConfiguration extends Shape
{
    /**
     * @param array{location: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
