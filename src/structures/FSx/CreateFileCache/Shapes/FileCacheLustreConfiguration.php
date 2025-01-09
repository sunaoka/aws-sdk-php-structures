<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PerUnitStorageThroughput
 * @property 'CACHE_1' $DeploymentType
 * @property string $MountName
 * @property string $WeeklyMaintenanceStartTime
 * @property FileCacheLustreMetadataConfiguration $MetadataConfiguration
 * @property LustreLogConfiguration $LogConfiguration
 */
class FileCacheLustreConfiguration extends Shape
{
    /**
     * @param array{
     *     PerUnitStorageThroughput?: int,
     *     DeploymentType?: 'CACHE_1',
     *     MountName?: string,
     *     WeeklyMaintenanceStartTime?: string,
     *     MetadataConfiguration?: FileCacheLustreMetadataConfiguration,
     *     LogConfiguration?: LustreLogConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
