<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityId
 */
class FilterByEntity extends Shape
{
    /**
     * @param array{entityId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
