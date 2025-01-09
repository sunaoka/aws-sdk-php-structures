<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $location
 */
class S3SourceConfiguration extends Shape
{
    /**
     * @param array{location: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
