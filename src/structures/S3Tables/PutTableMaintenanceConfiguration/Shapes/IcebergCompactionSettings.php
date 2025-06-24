<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647>|null $targetFileSizeMB
 * @property 'auto'|'binpack'|'sort'|'z-order'|null $strategy
 */
class IcebergCompactionSettings extends Shape
{
    /**
     * @param array{
     *     targetFileSizeMB?: int<1, 2147483647>|null,
     *     strategy?: 'auto'|'binpack'|'sort'|'z-order'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
