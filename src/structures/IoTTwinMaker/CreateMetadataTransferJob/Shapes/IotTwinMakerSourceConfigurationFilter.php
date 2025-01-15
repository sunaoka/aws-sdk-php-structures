<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterByComponentType|null $filterByComponentType
 * @property FilterByEntity|null $filterByEntity
 */
class IotTwinMakerSourceConfigurationFilter extends Shape
{
    /**
     * @param array{
     *     filterByComponentType?: FilterByComponentType|null,
     *     filterByEntity?: FilterByEntity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
