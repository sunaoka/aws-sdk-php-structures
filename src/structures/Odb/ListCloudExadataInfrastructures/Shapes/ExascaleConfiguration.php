<?php

namespace Sunaoka\Aws\Structures\Odb\ListCloudExadataInfrastructures\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalStorageSizeInGBs
 * @property int|null $availableStorageSizeInGBs
 * @property int|null $totalVmStorageSizeInGBs
 * @property int|null $availableVmStorageSizeInGBs
 */
class ExascaleConfiguration extends Shape
{
    /**
     * @param array{
     *     totalStorageSizeInGBs?: int|null,
     *     availableStorageSizeInGBs?: int|null,
     *     totalVmStorageSizeInGBs?: int|null,
     *     availableVmStorageSizeInGBs?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
