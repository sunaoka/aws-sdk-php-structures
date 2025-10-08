<?php

namespace Sunaoka\Aws\Structures\Odb\ListDbSystemShapes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $availableCoreCount
 * @property int|null $availableCoreCountPerNode
 * @property int|null $availableDataStorageInTBs
 * @property int|null $availableDataStoragePerServerInTBs
 * @property int|null $availableDbNodePerNodeInGBs
 * @property int|null $availableDbNodeStorageInGBs
 * @property int|null $availableMemoryInGBs
 * @property int|null $availableMemoryPerNodeInGBs
 * @property int|null $coreCountIncrement
 * @property int|null $maxStorageCount
 * @property int|null $maximumNodeCount
 * @property int|null $minCoreCountPerNode
 * @property int|null $minDataStorageInTBs
 * @property int|null $minDbNodeStoragePerNodeInGBs
 * @property int|null $minMemoryPerNodeInGBs
 * @property int|null $minStorageCount
 * @property int|null $minimumCoreCount
 * @property int|null $minimumNodeCount
 * @property int|null $runtimeMinimumCoreCount
 * @property string|null $shapeFamily
 * @property 'AMD'|'INTEL'|'INTEL_FLEX_X9'|'AMPERE_FLEX_A1'|null $shapeType
 * @property string|null $name
 * @property 'ECPU'|'OCPU'|null $computeModel
 * @property bool|null $areServerTypesSupported
 */
class DbSystemShapeSummary extends Shape
{
    /**
     * @param array{
     *     availableCoreCount?: int|null,
     *     availableCoreCountPerNode?: int|null,
     *     availableDataStorageInTBs?: int|null,
     *     availableDataStoragePerServerInTBs?: int|null,
     *     availableDbNodePerNodeInGBs?: int|null,
     *     availableDbNodeStorageInGBs?: int|null,
     *     availableMemoryInGBs?: int|null,
     *     availableMemoryPerNodeInGBs?: int|null,
     *     coreCountIncrement?: int|null,
     *     maxStorageCount?: int|null,
     *     maximumNodeCount?: int|null,
     *     minCoreCountPerNode?: int|null,
     *     minDataStorageInTBs?: int|null,
     *     minDbNodeStoragePerNodeInGBs?: int|null,
     *     minMemoryPerNodeInGBs?: int|null,
     *     minStorageCount?: int|null,
     *     minimumCoreCount?: int|null,
     *     minimumNodeCount?: int|null,
     *     runtimeMinimumCoreCount?: int|null,
     *     shapeFamily?: string|null,
     *     shapeType?: 'AMD'|'INTEL'|'INTEL_FLEX_X9'|'AMPERE_FLEX_A1'|null,
     *     name?: string|null,
     *     computeModel?: 'ECPU'|'OCPU'|null,
     *     areServerTypesSupported?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
