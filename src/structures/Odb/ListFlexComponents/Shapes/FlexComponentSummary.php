<?php

namespace Sunaoka\Aws\Structures\Odb\ListFlexComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $availableCoreCount
 * @property int|null $availableDbStorageInGBs
 * @property int|null $availableLocalStorageInGBs
 * @property int|null $availableMemoryInGBs
 * @property 'ECPU'|'OCPU'|null $computeModel
 * @property string|null $descriptionSummary
 * @property 'COMPUTE'|'CELL'|null $hardwareType
 * @property int|null $minimumCoreCount
 * @property string|null $name
 * @property int|null $runtimeMinimumCoreCount
 * @property string|null $shape
 */
class FlexComponentSummary extends Shape
{
    /**
     * @param array{
     *     availableCoreCount?: int|null,
     *     availableDbStorageInGBs?: int|null,
     *     availableLocalStorageInGBs?: int|null,
     *     availableMemoryInGBs?: int|null,
     *     computeModel?: 'ECPU'|'OCPU'|null,
     *     descriptionSummary?: string|null,
     *     hardwareType?: 'COMPUTE'|'CELL'|null,
     *     minimumCoreCount?: int|null,
     *     name?: string|null,
     *     runtimeMinimumCoreCount?: int|null,
     *     shape?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
