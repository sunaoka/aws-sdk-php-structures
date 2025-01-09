<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workspace
 */
class IotTwinMakerDestinationConfiguration extends Shape
{
    /**
     * @param array{workspace: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
