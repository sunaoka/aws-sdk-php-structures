<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<12, 1000> $PerUnitStorageThroughput
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
     *     PerUnitStorageThroughput?: int<12, 1000>,
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
