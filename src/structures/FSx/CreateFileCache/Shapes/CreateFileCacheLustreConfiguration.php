<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PerUnitStorageThroughput
 * @property 'CACHE_1' $DeploymentType
 * @property string $WeeklyMaintenanceStartTime
 * @property FileCacheLustreMetadataConfiguration $MetadataConfiguration
 */
class CreateFileCacheLustreConfiguration extends Shape
{
    /**
     * @param array{
     *     PerUnitStorageThroughput: int,
     *     DeploymentType: 'CACHE_1',
     *     WeeklyMaintenanceStartTime?: string,
     *     MetadataConfiguration: FileCacheLustreMetadataConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
