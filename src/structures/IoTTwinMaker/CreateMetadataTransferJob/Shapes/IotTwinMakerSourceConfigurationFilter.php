<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterByComponentType $filterByComponentType
 * @property FilterByEntity $filterByEntity
 */
class IotTwinMakerSourceConfigurationFilter extends Shape
{
    /**
     * @param array{
     *     filterByComponentType?: FilterByComponentType,
     *     filterByEntity?: FilterByEntity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
