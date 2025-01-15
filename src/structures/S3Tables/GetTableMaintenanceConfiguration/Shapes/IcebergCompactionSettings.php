<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647>|null $targetFileSizeMB
 */
class IcebergCompactionSettings extends Shape
{
    /**
     * @param array{targetFileSizeMB?: int<1, 2147483647>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
