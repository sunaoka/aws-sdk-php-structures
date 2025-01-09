<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $path
 * @property int $sizeInGb
 * @property bool $isSystemDisk
 */
class DiskInfo extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     path?: string,
     *     sizeInGb?: int,
     *     isSystemDisk?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
