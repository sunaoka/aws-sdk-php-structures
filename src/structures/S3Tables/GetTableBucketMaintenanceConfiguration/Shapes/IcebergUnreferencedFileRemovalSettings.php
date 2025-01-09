<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647> $unreferencedDays
 * @property int<1, 2147483647> $nonCurrentDays
 */
class IcebergUnreferencedFileRemovalSettings extends Shape
{
    /**
     * @param array{
     *     unreferencedDays?: int<1, 2147483647>,
     *     nonCurrentDays?: int<1, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
