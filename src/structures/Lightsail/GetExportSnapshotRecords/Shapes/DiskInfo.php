<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $path
 * @property int|null $sizeInGb
 * @property bool|null $isSystemDisk
 */
class DiskInfo extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     path?: string|null,
     *     sizeInGb?: int|null,
     *     isSystemDisk?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
