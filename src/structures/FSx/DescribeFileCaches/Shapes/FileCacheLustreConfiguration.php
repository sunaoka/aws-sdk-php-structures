<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<12, 1000>|null $PerUnitStorageThroughput
 * @property 'CACHE_1'|null $DeploymentType
 * @property string|null $MountName
 * @property string|null $WeeklyMaintenanceStartTime
 * @property FileCacheLustreMetadataConfiguration|null $MetadataConfiguration
 * @property LustreLogConfiguration|null $LogConfiguration
 */
class FileCacheLustreConfiguration extends Shape
{
    /**
     * @param array{
     *     PerUnitStorageThroughput?: int<12, 1000>|null,
     *     DeploymentType?: 'CACHE_1'|null,
     *     MountName?: string|null,
     *     WeeklyMaintenanceStartTime?: string|null,
     *     MetadataConfiguration?: FileCacheLustreMetadataConfiguration|null,
     *     LogConfiguration?: LustreLogConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
