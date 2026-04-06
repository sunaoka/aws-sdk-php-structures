<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentTypeId
 */
class FilterByComponentType extends Shape
{
    /**
     * @param array{componentTypeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
