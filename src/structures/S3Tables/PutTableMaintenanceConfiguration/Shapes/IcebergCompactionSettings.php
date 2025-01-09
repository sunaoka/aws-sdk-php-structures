<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $targetFileSizeMB
 */
class IcebergCompactionSettings extends Shape
{
    /**
     * @param array{targetFileSizeMB?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
