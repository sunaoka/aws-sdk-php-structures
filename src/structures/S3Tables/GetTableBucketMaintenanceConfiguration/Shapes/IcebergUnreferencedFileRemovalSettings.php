<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $unreferencedDays
 * @property int $nonCurrentDays
 */
class IcebergUnreferencedFileRemovalSettings extends Shape
{
    /**
     * @param array{
     *     unreferencedDays?: int,
     *     nonCurrentDays?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
