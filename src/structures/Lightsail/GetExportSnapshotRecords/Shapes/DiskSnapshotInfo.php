<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $sizeInGb
 */
class DiskSnapshotInfo extends Shape
{
    /**
     * @param array{sizeInGb?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
